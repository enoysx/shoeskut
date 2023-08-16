<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ServicesController extends Controller
{


    // ================================================================= USER & ROLES
    function get_user(Request $request)
    {
        $users = User::with('roles')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.user.index', compact('users'));
    }

    function create_user(Request $request)
    {
        $roles = Role::get();
        $user = null;
        return view('pages.user.form', compact('user', 'roles'));
    }

    function store_user(Request $request)
    {
        $user = User::updateOrCreate(['id' => $request->id], ['name' => $request->u_name, 'email' => $request->u_email, 'password' => $request->u_password]);

        $user->assignRole($request->role_id);

        if ($user) {
            return redirect('/users');
        }
        return back();
    }

    function edit_user($id)
    {
        $roles = Role::get();
        $user = User::where('id', $id)->first();
        return view('pages.user.form', compact('user', 'roles'));
    }

    function delete_user($id)
    {
        User::where('id', $id)->delete();

        return redirect('/users');
    }


    function get_role(Request $request)
    {
        $roles = Role::where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.role.index', compact('roles'));
    }
    function store_role(Request $request)
    {
        $role = Role::updateOrCreate(['id' => $request->role_id], ['name' => $request->role_name]);

        foreach ($request->permissions as $key => $value) {
            $role->givePermissionTo($value);
        }

        if ($role) {
            return redirect('/roles');
        }
        return back();
    }

    function create_role(Request $request)
    {
        $role = null;
        $permissions = Permission::get();

        return view('pages.role.form', compact('permissions', 'role'));
    }

    function edit_role($id)
    {
        $role = Role::with('permissions')->where('id', $id)->first();
        $permissions = Permission::get();

        return view('pages.role.form', compact('permissions', 'role'));
    }

    function delete_role($id)
    {
        $role = Role::where('id', $id)->delete();
        return redirect('/roles');
    }



    function get_permission(Request $request)
    {
        $permissions = Permission::where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.permission.index', compact('permissions'));
    }
    function store_permission(Request $request)
    {
        $permission = Permission::updateOrCreate(['id' => $request->permission_id], ['name' => $request->permission_name]);

        if ($permission) {
            return redirect('/permission');
        }
        return back();
    }

    function create_permission(Request $request)
    {
        $permission = null;

        return view('pages.permission.form', compact('permission'));
    }

    function edit_permission($id)
    {
        $permission = Permission::where('id', $id)->first();

        return view('pages.permission.form', compact('permission'));
    }

    function delete_permission($id)
    {
        $role = Permission::where('id', $id)->delete();
        return redirect('/permission');
    }






    // ================================================================= CUSTOMERS
    function get_customers(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.order_jasa', compact('customers'));
    }

    function post_customer(Request $request)
    {
        if ($request->customer_id != 0) {
            $customer = DB::table('customers')->where('id', $request->customer_id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'shoe_brand' => $request->shoe_brand,
                'size' => $request->size,
                'color' => $request->color,
                'minus' => $request->minus,
                'order_date' => $request->order_date,
                'updated_at' => now()
            ]);

            return redirect('/dashboard');
        }

        $customer = DB::table('customers')->where('id', $request->customer_id)->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'shoe_brand' => $request->shoe_brand,
            'size' => $request->size,
            'color' => $request->color,
            'minus' => $request->minus,
            'order_date' => $request->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }


    function create_customer()
    {
        $customer = null;
        return view('pages.order_jasa_form', compact('customer'));
    }


    function edit_customer($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('pages.order_jasa_form', compact('customer'));
    }

    function delete_customer($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect('/dashboard');
    }


    // ================================================================= Pembayaran
    function get_pembayaran(Request $request)
    {
        $datas = DB::table('payments')->where(function ($customer) use ($request) {
            $customer->where('invoice_number', 'like', '%' . $request->search . '%')
                ->orWhere('treatment', 'like', '%' . $request->search . '%')
                ->orWhere('bill_to', 'like', '%' . $request->search . '%');
        })
            ->join('customers', 'payments.bill_to', '=', 'customers.id')
            ->when($request->start_date && $request->end_date, function ($result) use ($request) {
                $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
            })->select('payments.*', 'customers.name as customer_name')->paginate(10);

        return view('pages.pembayaran', compact('datas'));
    }

    function post_pembayaran(Request $request)
    {
        $payloadPembayaran = [];
        foreach ($request->toArray() as $key => $value) {
            $payloadPembayaran[$key] = $value;
        }
        $payloadPembayaran['pick_&_delivery'] = 1;
        $payloadPembayaran['payable_to'] = "admin";
        $payloadPembayaran['id'] = $request->pembayaran_id;


        unset($payloadPembayaran['_token']);
        unset($payloadPembayaran['pembayaran_id']);

        $payloadPembayaran['total'] = $payloadPembayaran['price'] * $payloadPembayaran['many'];
        if ($payloadPembayaran['id'] != 0) {
            $payloadPembayaran['updated_at'] = now();

            $isSaved = DB::table('payments')->where('id', $payloadPembayaran['id'])->update($payloadPembayaran);

            if ($isSaved) {
                return redirect('/pembayaran');
            }
            return back();
        }
        $payloadPembayaran['created_at'] = now();

        $id = DB::table('payments')->where('id', $request->pembayaran_id)->insertGetId($payloadPembayaran);
        $isSaved = DB::table('payments')->where('id', $id)->update(['invoice_number' => 'INV-00' . $id]);
        if ($isSaved) {
            return redirect('/pembayaran');
        }
        return back();
    }


    function create_pembayaran()
    {
        $data = null;
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('detailing', 1)->where('packaging', 1);
        })->get();
        return view('pages.pembayaran_form', compact('data', 'customers'));
    }


    function edit_pembayaran($id)
    {
        $data = DB::table('payments')->where('id', $id)->first();
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('detailing', 1)->where('packaging', 1);
        })->get();
        return view('pages.pembayaran_form', compact('data', 'customers'));
    }

    function delete_pembayaran($id)
    {
        DB::table('payments')->where('id', $id)->delete();
        return redirect('/pembayaran');
    }



    // ================================================================= Penjemputan
    function get_penjemputan(Request $request)
    {
        $datas = DB::table('monitoring')->where(function ($customer) use ($request) {
            $customer->where('workmanship', 'like', '%' . $request->search . '%')
                ->orWhere('pickup_date', 'like', '%' . $request->search . '%');
        })
            ->where(function ($q) {
                $q->where('detailing', 0)->orWhereNull('detailing');
            })
            ->where('delivery', 1)
            ->join('customers', 'monitoring.customer_id', '=', 'customers.id')
            ->when($request->start_date && $request->end_date, function ($result) use ($request) {
                $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
            })->select('monitoring.*', 'customers.name as customer_name', 'customers.phone as customer_phone', 'customers.shoe_brand as shoe_brand')->paginate(10);

        return view('pages.penjemputan', compact('datas'));
    }

    function post_penjemputan(Request $request)
    {
        $payload = [];
        foreach ($request->toArray() as $key => $value) {
            $payload[$key] = $value;
        }
        $payload['delivery'] = 1;
         $payload['id'] = $request->penjemputan_id;

        unset($payload['_token']);
        unset($payload['penjemputan_id']);
        if ($payload['id'] != 0) {
            $payload['updated_at'] = now();
            $isSaved = DB::table('monitoring')->where('id', $payload['id'])->update($payload);
            if ($isSaved) {
                return redirect('/penjemputan');
            }
            return back();
        }
        $payload['created_at'] = now();

        $isSaved = DB::table('monitoring')->where('id', $payload['id'])->insertGetId($payload);
        if ($isSaved) {
            return redirect('/penjemputan');
        }
        return back();
    }


    function create_penjemputan()
    {
        $data = null;
        $customers = DB::table('customers')->get();
        return view('pages.penjemputan_form', compact('data', 'customers'));
    }


    function edit_penjemputan($id)
    {
        $data = DB::table('monitoring')->where('id', $id)->first();
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('delivery', 0)->orWhere('delivery', '=', null);
        })->get();
        return view('pages.penjemputan_form', compact('data', 'customers'));
    }

    function delete_penjemputan($id)
    {
        DB::table('monitoring')->where('id', $id)->update([
            'delivery' => 0,
            'updated_at' => now()
        ]);
        return redirect('/penjemputan');
    }




    // ================================================================= Pengerjaan
    function get_pengerjaan(Request $request)
    {
        $datas = DB::table('monitoring')->where(function ($customer) use ($request) {
            $customer->where('workmanship', 'like', '%' . $request->search . '%')
                ->orWhere('pickup_date', 'like', '%' . $request->search . '%');
        })
            ->where(function ($q) {
                $q->where('packaging', 0)->orWhereNull('packaging');
            })
            ->where('detailing', 1)
            ->join('customers', function ($join) {
                $join
                    ->on('monitoring.customer_id', '=', 'customers.id')
                    ->join('payments', 'customers.id', '=', 'payments.bill_to');
            })
            ->when($request->start_date && $request->end_date, function ($result) use ($request) {
                $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
            })->select('monitoring.*', 'customers.name as customer_name', 'customers.phone as customer_phone', 'customers.shoe_brand as shoe_brand', 'payments.treatment as treatment')->paginate(10);

        return view('pages.pengerjaan', compact('datas'));
    }

    function post_pengerjaan(Request $request)
    {
        $payload = [];
        foreach ($request->toArray() as $key => $value) {
            $payload[$key] = $value;
        }
        $payload['detailing'] = 1;
        $payload['id'] = $request->pengerjaan_id;

        unset($payload['_token']);
        unset($payload['pengerjaan_id']);

        DB::table('payments')->where('bill_to', $payload['customer_id'])->update([
            "treatment" => $payload['treatment'],
            "updated_at" => now()
        ]);
        unset($payload['treatment']);
        if ($payload['customer_id'] != 0) {
            $payload['updated_at'] = now();
            $isSaved = DB::table('monitoring')->where('customer_id', $payload['customer_id'])->update($payload);
            if ($isSaved) {
                return redirect('/pengerjaan');
            }
            return back();
        }
        $payload['created_at'] = now();
        $payload['updated_at'] = now();

        $isSaved = DB::table('monitoring')->where('id', $payload['id'])->insertGetId($payload);
        if ($isSaved) {
            return redirect('/pengerjaan');
        }
        return back();
    }


    function create_pengerjaan()
    {
        $data = null;
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('delivery', 1);
        })->get();
        return view('pages.pengerjaan_form', compact('data', 'customers'));
    }


    function edit_pengerjaan($id)
    {
        $data = DB::table('monitoring')
            ->where('detailing', 1)
            ->join('customers', function ($join) {
                $join
                    ->on('monitoring.customer_id', '=', 'customers.id')
                    ->join('payments', 'customers.id', '=', 'payments.bill_to');
            })->select('monitoring.*', 'customers.name as customer_name', 'customers.phone as customer_phone', 'customers.shoe_brand as shoe_brand', 'payments.treatment as treatment')->first();
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('delivery', 1);
        })->get();
        return view('pages.pengerjaan_form', compact('data', 'customers'));
    }

    function delete_pengerjaan($id)
    {
        DB::table('monitoring')->where('id', $id)->update([
            'detailing' => 0,
            'updated_at' => now()
        ]);
        return redirect('/pengerjaan');
    }

    // ================================================================= Pengembalian
    function get_pengembalian(Request $request)
    {
        $datas = DB::table('monitoring')->where(function ($customer) use ($request) {
            $customer->where('workmanship', 'like', '%' . $request->search . '%')
                ->orWhere('pickup_date', 'like', '%' . $request->search . '%');
        })
            ->where('packaging', 1)
            ->join('customers', function ($join) {
                $join
                    ->on('monitoring.customer_id', '=', 'customers.id');
            })
            ->when($request->start_date && $request->end_date, function ($result) use ($request) {
                $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
            })->select('monitoring.*', 'customers.name as customer_name', 'customers.phone as customer_phone', 'customers.address as customer_address')->paginate(10);

        return view('pages.pengembalian', compact('datas'));
    }

    function post_pengembalian(Request $request)
    {
        $payload = [];
        foreach ($request->toArray() as $key => $value) {
            $payload[$key] = $value;
        }
        $payload['packaging'] = 1;
        $payload['id'] = $request->pengembalian_id;

        unset($payload['_token']);
        unset($payload['pengembalian_id']);
        if ($payload['customer_id'] != 0) {
            $payload['updated_at'] = now();
            $isSaved = DB::table('monitoring')->where('customer_id', $payload['customer_id'])->update($payload);
            if ($isSaved) {
                return redirect('/pengembalian');
            }
            return back();
        }
        $payload['created_at'] = now();
        $payload['updated_at'] = now();

        $isSaved = DB::table('monitoring')->where('id', $payload['id'])->insertGetId($payload);
        if ($isSaved) {
            return redirect('/pengembalian');
        }
        return back();
    }


    function create_pengembalian()
    {
        $data = null;
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('detailing', 1)->where('delivery', 1);
        })->get();
        return view('pages.pengembalian_form', compact('data', 'customers'));
    }


    function edit_pengembalian($id)
    {
        $data = DB::table('monitoring')->where('id', $id)->first();
        $customers = DB::table('customers')->join('monitoring', function($q) {
            $q->on('customers.id', '=', 'monitoring.customer_id')
            ->where('delivery', 1)
            ->where('detailing', 1);
        })->get();
        return view('pages.pengembalian_form', compact('customers', 'data'));
    }

    function delete_pengembalian($id)
    {
        DB::table('monitoring')->where('id', $id)->update([
            'packaging' => 0,
            'updated_at' => now()
        ]);
        return redirect('/pengembalian');
    }


    // ================================================================= Laporan
    function get_laporan(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })
        ->join('payments', 'customers.id', '=', 'payments.bill_to')
        ->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.laporan', compact('customers'));
    }


    function print_laporan(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })
        ->join('payments', 'customers.id', '=', 'payments.bill_to')
        ->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        $pdf = PDF::loadView('laporan_pdf', compact('customers'));
        $pdf->setPaper('A4', 'portrait');
        $pdf->setOption('margin-top', 0);
        $pdf->setOption('margin-right', 0);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('margin-left', 0);

        $loadPdf = $pdf->stream('data-laporan.pdf');

        return $loadPdf;
    }
}
