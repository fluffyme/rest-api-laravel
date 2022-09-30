<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoicesFilter extends ApiFilter
{

    protected $safeParams =[
        'customerId' =>['eq'],
        'status' =>['eq','ne'],
        'amount' =>['eq', 'gt', 'lt', 'gte', 'lte'],
        'billedDate' =>['eq', 'gt', 'lt', 'gte', 'lte'],
        'paidDate' =>['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap =[
        'eq' => '=',
        'ne' => '!=',
        'gt'=> '>',
        'gte'=> '>=',
        'lt' => '<',
        'lte' => '<=',
    ];

}

