<?php

namespace Modules\PaymentManagement\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Routing\Controller;
use Modules\PaymentManagement\Entities\Payment;
use Modules\PaymentManagement\Http\Requests\AddPaymentRequest;
use Modules\PaymentManagement\Http\Resources\PaymentResourceCollection;
use Modules\PaymentManagement\Http\Requests\UpdatePaymentRequest;
use Spatie\QueryBuilder\QueryBuilder;



class PaymentManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api-system-user'])->except([
            'store',
            'index',
            'update',
            'destroy'
        ]);
    }


    /**

     * @return ResponseFactory|Response
     */
    public function index(Request $request)
    {
        return response()->json([
            'data' => PaymentResourceCollection::make(
                QueryBuilder::for(Payment::class)
                    ->defaultSort('-id')
                    ->allowedFilters(['email'])
                    ->allowedSorts(['first_name', 'last_name'])
                    ->paginate($request->input('per_page', 10))
            ),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     * @param AddFishRequest $request
     * @return ResponseFactory|Response
     */
    public function store(AddPaymentRequest $request)
    {
        $data = $request->validated();
        $fishdata = Payment::create($data);

        return response()->json([
            'data' => $fishdata,
        ]);
    }

    public function update(UpdatePaymentRequest $request, Payment $id)
    {
        $data = $request->validated();
        $id->update($data);
        return response()->json(['data' => $id]);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *   * @return User
    //  */
    public function destroy(Payment $id)
    {
        return response()->json(['successfully deleted' => $id->delete()]);
    }
}
