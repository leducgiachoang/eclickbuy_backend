@extends('template.backend')
    @section('title')
    Trang chủ quản lý
    @endsection
    @section('container')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NGƯỜI DÙNG</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format( $count_tk ,0,",",".")}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DOANH THU</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">VND {{number_format( $count_tien ,2,",",".")}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SẢN PHẨM</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{number_format( $count_product ,0,",",".")}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SẢN PHẨM ĐÃ BÁN</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format( $san_pham_da_ban ,0,",",".")}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Số lượng sản phẩm đã bán</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <canvas id="myChart" width="100%" height="46"></canvas>
                <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            @foreach ($san_phams as $san_pham)
                                '{{ $san_pham->ten_san_pham }}',
                            @endforeach
                        ],
                        datasets: [{
                            label: 'hide',
                            data: [
                                @foreach ($san_phams as $san_pham)
                                <?php $chitiet = DB::table('chi_tiet_hoa_don')->where('id_san_pham', $san_pham->id)->sum('so_luong');
                                echo $chitiet
                                ?>,
                                @endforeach
                                ],
                            backgroundColor: [
                                '#000000',
                                    '#9172EC',
                                    '#2C3539',
                                    '#2B1B17',
                                    '#34282C',
                                    '#25383C',
                                    '#3B3131',
                                    '#413839',
                                    '#3D3C3A',
                                    '#463E3F',
                                    '#4C4646',
                                    '#504A4B',
                                    '#565051',
                                    '#5C5858',
                                    '#625D5D',
                                    '#666362',
                                    '#6D6968',
                                    '#726E6D',
                                    '#736F6E',
                                    '#837E7C',
                                    '#848482',
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>
              </div>
            </div>
          </div>

          <!-- Pie Chart -->
          <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">THÔNG KÊ LƯỢT XEM</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
                    <script>
                    var ctx = document.getElementById('myPieChart').getContext('2d');
                    var myPieChart  = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: [
                                @foreach ($san_phams as $san_pham)
                                '{{ $san_pham->ten_san_pham }}',
                                @endforeach
                                ],
                            datasets: [{
                                label: '# of Votes',
                                data: [
                                    @foreach ($san_phams as $san_pham)
                                    {{ $san_pham->so_luot_xem }},
                                    @endforeach
                                    ],
                                backgroundColor: [
                                    '#000000',
                                    '#9172EC',
                                    '#2C3539',
                                    '#2B1B17',
                                    '#34282C',
                                    '#25383C',
                                    '#3B3131',
                                    '#413839',
                                    '#3D3C3A',
                                    '#463E3F',
                                    '#4C4646',
                                    '#504A4B',
                                    '#565051',
                                    '#5C5858',
                                    '#625D5D',
                                    '#666362',
                                    '#6D6968',
                                    '#726E6D',
                                    '#736F6E',
                                    '#837E7C',
                                    '#848482',

                                ],

                                borderWidth: 1
                            }]
                        },
                        options: 'options',
                    });
                    </script>
              </div>
            </div>
          </div>

          {{--  số tiền  --}}

          <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-12">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">THÔNG KÊ SỐ LƯỢNG ĐÁNH GIÁ CỦA SẢN PHẨM</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <canvas id="myLineChart" width="100%" height="30"></canvas>
                    <script>
                    var ctx = document.getElementById('myLineChart').getContext('2d');
                    var myLineChart   = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach ($san_phams as $san_pham)
                                '{{ $san_pham->ten_san_pham }}',
                                @endforeach
                                ],
                            datasets: [{
                                label: '# Trung bình số sao đánh giá',
                                data: [
                                    @foreach ($san_phams as $san_pham)
                                    <?php $count_danhgia = DB::table('danh_gia')->where('id_san_pham', $san_pham->id)->count('id');
                                    if($count_danhgia == 0){
                                        $coun_dg = 1;
                                    }else{
                                        $coun_dg = $count_danhgia;
                                    }
                                    $tongsao = DB::table('danh_gia')->where('id_san_pham', $san_pham->id)->sum('so_sao');
                                    if($tongsao == 0){
                                        $sao = 1;
                                    }else{
                                        $sao = $tongsao;
                                    }
                                    echo $sao/$coun_dg;
                                    ?>,
                                    @endforeach
                                    ],
                                backgroundColor: [
                                    '#EAC117',

                                ],

                                borderWidth: 1
                            }]
                        },
                        options: 'options',
                    });
                    </script>
              </div>
            </div>
          </div>
      </div>
    @endsection

    @section('script')
    <script src="../js/Chart.min.js"></script>

    @endsection

