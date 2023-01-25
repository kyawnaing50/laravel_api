<?php
namespace App\Services;
use Illuminate\Http\Request;


class CustomerQuery{
    protected $safeParms=[
        'name'=>['eq'],
        'type'=>['eq'],
        'email'=>['eq'],
        'address'=>['eq'],
        'city'=>['eq'],
        'state'=>['eq'],
    ];
    protected $operatorMap=[
        'eq'=>'=',
        'lt'=>'<=',
    ];
}