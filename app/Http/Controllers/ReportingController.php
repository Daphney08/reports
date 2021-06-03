<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Customer;
use\App\Models\Order;
use Carbon\Carbon;
class ReportingController extends Controller
{
    protected $request;
    //declare varialble
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }
    public function index()
    {
       
        return view('index')->with([
            'total_number_of_customers' => Customer::count(),
            'total_number_of_customers_using_mobile' => Customer::whereDevice('app')->count(),
            'total_number_of_customers_using_browser' => Customer::whereDevice('browser')->count(),
            'female_customers' => Customer::whereGender('female')->count(),
            'male_customers' => Customer::whereGender('male')->count(),
            'age' => [
                'child' => Customer::whereBetween('age', [0,12])->count(),
                'adolescence' => Customer::whereBetween('age', [13,18])->count(),
                'adult' => Customer::whereBetween('age', [19,59])->count(),
                'senioradult' => Customer::where('age', '>=', 60)->count()
            ],
            'country' => [
                'ASIA' => Customer::whereCountry('ASIA')->count(),
                'EUROPE' => Customer::whereCountry('EUROPE')->count(),
                'USA' => Customer::whereCountry('USA')->count(),
                'AFRICA' => Customer::whereCountry('AFRICA')->count(),
                'AUSTRALIA' => Customer::whereCountry('AUSTRALIA')->count()
            ]

        ]);
    }
    public function orders()
    {

        $data = [
            'total_earned' => Order::where('status', '!=', 'canceled')->sum('total'),
            'avg_order_total' => Order::avg('total'),
            'category' => [
                'Toys' => Order::whereCategory('Toys')->count(),
                 'Books'  => Order::whereCategory('Books')->count(),
                 'Home_Supplies'  => Order::whereCategory('Home Supplies')->count(),
                'Accessories'  => Order::whereCategory('Accessories')->count(),
                 'Gadgets'  => Order::whereCategory('Gadgets')->count(),
                 'Food'  => Order::whereCategory('Food')->count(),
                'Appliances'  => Order::whereCategory('Appliances')->count()
            ],
            'status' => [
                'processing' => Order::whereStatus('processing')->count(),
                 'shipped'  => Order::whereStatus('shipped')->count(),
                 'delivered'  => Order::whereStatus('delivered')->count(),
                'canceled'  => Order::whereStatus('canceled')->count()
                
            ],
            'promotion' => [
                'used' => Order::wherePromo('1')->count(),
                 'not_used'  => Order::wherePromo('0')->count()
               
                
            ],
            'year' => [
                '10' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(10),  
                Carbon::parse('2021-12-31')->subYears(10)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '9' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(9),  
                Carbon::parse('2021-12-31')->subYears(9)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '8' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(8),  
                Carbon::parse('2021-12-31')->subYears(8)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '7' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(7),  
                Carbon::parse('2021-12-31')->subYears(7)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '6' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(6),  
                Carbon::parse('2021-12-31')->subYears(6)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '5' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(5),  
                Carbon::parse('2021-12-31')->subYears(5)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '4' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(4),  
                Carbon::parse('2021-12-31')->subYears(4)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '3' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(3),  
                Carbon::parse('2021-12-31')->subYears(3)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '2' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(2),  
                Carbon::parse('2021-12-31')->subYears(2)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '1' =>Order::whereBetween('order_date', [
                Carbon::parse('2021-01-01')->subYears(1),  
                Carbon::parse('2021-12-31')->subYears(1)  ]
                )->where('status', '!=', 'canceled')->sum('total'),

                '0' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01'),  
                    Carbon::parse('2021-12-31')  ]
                )->where('status', '!=', 'canceled')->sum('total'),
                ],
        
        ];
        return view('orders')->withData($data);
        }
        public function summary()
        {
            $data = [
                
                'total_order' => [
                    '10' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(10),  
                    Carbon::parse('2021-12-31')->subYears(10)  ]
                    )->count('status'),
    
                    '9' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(9),  
                    Carbon::parse('2021-12-31')->subYears(9)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '8' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(8),  
                    Carbon::parse('2021-12-31')->subYears(8)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '7' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(7),  
                    Carbon::parse('2021-12-31')->subYears(7)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '6' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(6),  
                    Carbon::parse('2021-12-31')->subYears(6)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '5' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(5),  
                    Carbon::parse('2021-12-31')->subYears(5)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '4' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(4),  
                    Carbon::parse('2021-12-31')->subYears(4)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '3' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(3),  
                    Carbon::parse('2021-12-31')->subYears(3)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '2' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(2),  
                    Carbon::parse('2021-12-31')->subYears(2)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '1' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(1),  
                    Carbon::parse('2021-12-31')->subYears(1)  ]
                    )->where('status', '!=', 'canceled')->count(),
    
                    '0' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01'),  
                        Carbon::parse('2021-12-31')  ]
                    )->where('status', '!=', 'canceled')->count(),
                    ],
            
                'delivered_order' => [
                    '10' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(10),  
                    Carbon::parse('2021-12-31')->subYears(10)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '9' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(9),  
                    Carbon::parse('2021-12-31')->subYears(9)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '8' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(8),  
                    Carbon::parse('2021-12-31')->subYears(8)  ]
                    )->where('status', '!=', 'canceled')->count(),
            
                    '7' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(7),  
                    Carbon::parse('2021-12-31')->subYears(7)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '6' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(6),  
                    Carbon::parse('2021-12-31')->subYears(6)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '5' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(5),  
                    Carbon::parse('2021-12-31')->subYears(5)  ]
                    )->where('status', '!=', 'canceled')->count(),
            
                    '4' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(4),  
                    Carbon::parse('2021-12-31')->subYears(4)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '3' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(3),  
                    Carbon::parse('2021-12-31')->subYears(3)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '2' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(2),  
                    Carbon::parse('2021-12-31')->subYears(2)  ]
                    )->where('status', '!=', 'canceled')->count(),
            
                    '1' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(1),  
                    Carbon::parse('2021-12-31')->subYears(1)  ]
                    )->where('status', '=', 'canceled')->count(),
            
                    '0' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01'),  
                        Carbon::parse('2021-12-31')  ]
                    )->where('status', '=', 'canceled')->count(),
                    ],
                'canceled_order' => [
                    '10' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(10),  
                    Carbon::parse('2021-12-31')->subYears(10)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '9' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(9),  
                    Carbon::parse('2021-12-31')->subYears(9)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '8' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(8),  
                    Carbon::parse('2021-12-31')->subYears(8)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '7' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(7),  
                    Carbon::parse('2021-12-31')->subYears(7)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '6' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(6),  
                    Carbon::parse('2021-12-31')->subYears(6)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '5' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(5),  
                    Carbon::parse('2021-12-31')->subYears(5)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '4' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(4),  
                    Carbon::parse('2021-12-31')->subYears(4)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '3' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(3),  
                    Carbon::parse('2021-12-31')->subYears(3)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '2' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(2),  
                    Carbon::parse('2021-12-31')->subYears(2)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '1' =>Order::whereBetween('order_date', [
                    Carbon::parse('2021-01-01')->subYears(1),  
                    Carbon::parse('2021-12-31')->subYears(1)  ]
                    )->where('status', '=', 'canceled')->count(),

                    '0' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01'),  
                        Carbon::parse('2021-12-31')  ]
                    )->where('status', '=', 'canceled')->count(),
                    ],
            ];
            return view('summary')->withData($data);
        }
            public function category()
            {
                $data = [
                    
                    'total_order' => [
                        '10' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(10),  
                        Carbon::parse('2021-12-31')->subYears(10)  ]
                        )->count('status'),
        
                        '9' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(9),  
                        Carbon::parse('2021-12-31')->subYears(9)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '8' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(8),  
                        Carbon::parse('2021-12-31')->subYears(8)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '7' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(7),  
                        Carbon::parse('2021-12-31')->subYears(7)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '6' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(6),  
                        Carbon::parse('2021-12-31')->subYears(6)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '5' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(5),  
                        Carbon::parse('2021-12-31')->subYears(5)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '4' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(4),  
                        Carbon::parse('2021-12-31')->subYears(4)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '3' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(3),  
                        Carbon::parse('2021-12-31')->subYears(3)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '2' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(2),  
                        Carbon::parse('2021-12-31')->subYears(2)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '1' =>Order::whereBetween('order_date', [
                        Carbon::parse('2021-01-01')->subYears(1),  
                        Carbon::parse('2021-12-31')->subYears(1)  ]
                        )->where('status', '!=', 'canceled')->count(),
        
                        '0' =>Order::whereBetween('order_date', [
                            Carbon::parse('2021-01-01'),  
                            Carbon::parse('2021-12-31')  ]
                        )->where('status', '!=', 'canceled')->count(),
                        ],
                
                
                ];
                return view('category')->withData($data);
    }
}