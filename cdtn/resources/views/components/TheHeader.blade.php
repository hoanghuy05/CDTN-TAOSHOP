<style>
.cntr {
  display: table;
  width: 40px;
  height: 40px;
  margin-bottom: 15px;
}
.cntr .cntr-innr {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}
/*** STYLES ***/
.search {
  display: inline-block;
  position: relative;
  height: 35px;
  width: 35px;
  box-sizing: border-box;
  margin: 0px 8px 7px 0px;
  padding: 7px 9px 0px 9px;
  border: 3px solid #000000;
  border-radius: 25px;
  transition: all 200ms ease;
  cursor: text;
}
.search:after {
  content: "";
  position: absolute;
  width: 2px;
  height: 15px;
  right: -5px;
  top: 21px;
  background: #000000;
  border-radius: 3px;
  transform: rotate(-45deg);
  transition: all 200ms ease;
  margin-bottom: 2px;
}
.search.active,
.search:hover {
  width: 200px;
  margin-right: 0px;
}
.search.active:after,
.search:hover:after {
  height: 0px;
}
.search input {
  width: 100%;
  border: none;
  box-sizing: border-box;
  font-family: Helvetica;
  font-size: 17px;
  color: black;
  background: transparent;
  outline-width: 0px;
  height: 87%;
}
</style>


<div class="header d-flex align-items-center
        justify-content-between">
    <a class="m-logo" href="{{ route('index') }}">
        <img src="" alt="">
    </a>
    <div class="m-header-menu">
        <ul class="header-menu d-flex">
            <li class="header-item"><a href="{{ route('getPhone') }}">Iphone</a></li>
            <li class="header-item ipad-page"><a href="{{ route('getIpad') }}">Ipad</a></li>
            <li class="header-item"><a href="{{ route('getAirpods') }}">Airpords</a></li>
            <li class="header-item"><a href="{{ route('new_feed') }}">Tin tức</a></li>
            <li class="header-item"><a href="{{ route('getAccessories') }}">Phụ kiện</a></li>
            <li class="header-item"><a href="{{ route('installment') }}">Trả góp</a></li>
        </ul>
    </div>
    <div class="m-header-right h-100 d-flex align-items-center ">

        @auth
            <span></span>
        @else
            <div class="me-4 mb-3 login-text font-size-18 btn-login"> Đăng nhập</div>
        @endauth
        <a href="{{ route('getShopping_Cart') }}" class="position-relative">
            <div class=" mi-24 icon-cart me-4 mb-3">

            </div>
            @isset($total_shopping)
                <div class="number_shopping_cart"><span>{{ $total_shopping[0]->total }}</span></div>
            @endisset

        </a>
    <form action="/category/SearchProduct"  method="get" role="search">
        <div class="cntr">
            <div class="cntr-innr">
                <label class="search" for="inpt_search">
                    <input id="inpt_search" value="" name="key" type="text"/>
                </label>
            </div>
        </div>
    </form>
        @auth
            <div class="me-4 mb-3  font-size-18 login-text user-header pointer" id="user-header">
                {{ auth()->user()->username }}
                <img class="ms-2 mi-32" src="{{ asset('assets/icons/person.jpg') }}" alt="">
                <div class="mi-chervon-down mi-ce mi-16 mt-2 ms-1"></div>
                <div class="dropdown-user">
                    <a href="{{ route('profile') }}">
                        <div class="item-dropdown-user profile_user">
                            <div class="mi mi-24 mi-user me-2"></div>Hồ sơ của tôi
                        </div>
                    </a>

                    <form id="logoutForm" method="get">
                        @csrf
                        <div class="item-dropdown-user" id="btnLogout">
                            <div class="mi mi-24 mi-logout me-2"></div>Đăng xuất
                        </div>
                    </form>
                </div>
                <div class="dropdown-user-box">
                </div>
            </div>
        @endauth

    </div>
</div>
