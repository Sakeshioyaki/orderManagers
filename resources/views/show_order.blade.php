   
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</head>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-main">
        <div class="app-main__outer">
            <div class="app-main__inner">           
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Thông tin chi tiết của </h5>
                                @if ($detail->count() == 0)
                                    <div><h3 class="text-center red">{{ 'Không tìm thấy bản ghi nào.' }}</h3></div>
                                @else
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Name Product</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($detail as $key)
                                            <tr>
                                                <td>{{$key->id}}</td>
                                                <td>{{$key->name_product}}</td>
                                                <td>{{$key->amount}}</td>
                                                <td>{{$key->quantity}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>