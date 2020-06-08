<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/dashboard" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="/images/1logo-small.png">
          </div>
        </a>
        <a href="/dashboard" class="simple-text logo-normal" style="padding-top: 15px">
          COFFEE GANG
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/order">
              <i class="nc-icon nc-box"></i>
              <p>Create Order</p>
            </a>
          </li>
          <li>
            <a href="/customer">
                <i class="nc-icon nc-single-02"></i>
                <p>CUSTOMER</p>
            </a>
          </li>
          <li>
            <a href="/product">
                <i class="nc-icon nc-box-2"></i>
                <p>PRODUCT</p>
            </a>
          </li>
          <li>
            <a href="/addproduct">
                <i class="nc-icon nc-bag-16"></i>
                <p>ADD PRODUCT</p>
            </a>
          </li>
          <li>
            <a href="/stock">
                <i class="nc-icon nc-shop"></i>
                <p>STOCK</p>
            </a>
          </li>
          <li>
            <a href="/supplier">
                <i class="nc-icon nc-paper"></i>
                <p>SUPPLIER</p>
            </a>
          </li>
          <li style="font-size: 13px; color:#808B96; margin-bottom:20px;">
            <a href="">
                <i class="nc-icon nc-circle-10"></i>
            </a>

            <div class="dropdown dropright">
                <p  class="dropdown-toggle" data-toggle="dropdown" style="width: 30px;">
                  USER
                </p>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/setupuser">ADD USER</a>
                  <a class="dropdown-item" href="/user">USER LIST</a>
                  <a class="dropdown-item" href="/staff">STAFF</a>
                </div>
              </div>

          </li>
          <li>
            <a href="/expense">
                <i class="nc-icon nc-money-coins"></i>
                <p>EXPENSE</p>
            </a>
          </li>
          <li class="active-pro">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="nc-icon nc-button-power"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>
