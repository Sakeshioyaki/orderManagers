   
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
                            <div class="card-body"><h5 class="card-title">Danh sách </h5>
                                @if ($orders->count() == 0)
                                    <div><h3 class="text-center red">{{ 'Không tìm thấy bản ghi nào.' }}</h3></div>
                                @else
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">First Name</th>
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Trang thái</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Thời gian</th>
                                            <th class="text-center">Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $key)
                                            <tr>
                                                <td>{{$key->id}}</td>
                                                <td class="text-center">{{ $key->first_name }}</td>
                                                <td class="text-center">{{ $key->last_name }}</td>
                                                <td>Đã đặt hàng</td>
                                                <td>{{$key->address}}</td>
                                                <td>{{  date("H:i:s d/m/Y",strtotime($key->created_at)) }}</td>
                                                <td>
                                                    <p class="text-center">
                                                       <a href="{{ URL::to('api/order/'.$key->id) }}"> Hiển thị</a>
                                                    </p>
                                                </td>
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
