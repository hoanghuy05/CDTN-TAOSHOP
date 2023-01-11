@section('admin_content')
    <div class="content-home">
        <div class="customer-list-container">
            <div class="w-100 mb-3">
                <div class="list-title">Trang chủ</div>
            </div>
            <div class="content-home-wrapper">
                <div>
                    <div class="d-flex content-home-header">
                        <div class="flex-1 content-home-header-item">
                            <img src="{{ asset('assets/images/order_chart.png') }}" class=" h-100" alt="">
                        </div>
                        <div class="flex-1 content-home-header-item">
                            <img src="{{ asset('assets/images/user_chart.jpg') }}" class="h-100" alt="">
                        </div>
                        <div class="flex-1 content-home-header-item">
                            <img src="{{ asset('assets/images/visitor_chart.jpg') }}" class="h-100" alt="">
                        </div>
                    </div>
                    <div class="w-100 d-flex content-home-main">
                        <div class="w-65 h-100 d-flex flex-column">
                            <img src="{{ asset('assets/images/sell_chart.jpg') }}" class="" alt="">
                            <img src="{{ asset('assets/images/sell_chart_2.jpg') }}" alt="" class="">
                        </div>
                        <div class="flex-1">
                            <div>
                                <img src="{{ asset('assets/images/order_chart_2.jpg') }}" class="w-100" alt="">
                            </div>
                            <div class="content-home-main-overview">
                                <img src="{{ asset('assets/images/overview_chart.jpg') }}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
