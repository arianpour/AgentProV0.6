<?php namespace App\Http\Controllers;

use App\BankDetail;
use App\Client;
use App\Http\Requests;
use App\Http\Requests\StoreBankDetailPostrequest;
use Illuminate\Support\Facades\Session;

class BankDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('general.addBankDetail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBankDetailPostRequest $request
     * @return Response
     * @internal param $id
     */
    public function store(StoreBankDetailPostRequest $request)
    {
        $bank = new BankDetail(array(
            'bankName' => $request->bankName,
            'accountNo' => $request->accountNo,

            'client_id' => Session::get('ClientInsertedId'),

        ));
        $bank->save();
        Session::flash('flash_message', 'Bank details successfully added! Need to add the Address');
        Session::put('addressMessage', 'New Address for Owner');
        return redirect('address/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Client $client)
    {
        $bankDetailId = $client->bankdetails()->first()->id;
        $bank = BankDetail::findOrFail($bankDetailId);
        return view('general.editBankDetail', compact('bank', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param StoreBankDetailPostRequest $request
     * @return Response
     */
    public function update(BankDetail $bank, StoreBankDetailPostRequest $request)
    {
        $input = $request->all();
        $bank->fill($input)->save();
        Session::flash('flash_message', 'Bank Details successfully Updated!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
