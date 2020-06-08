{{-- NavBar --}}
<div class="sidebar" data-color="white" data-active-color="danger" style="width:11%;">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small" style="width: 30px; height: 35px;">
                <img src="{{asset('admina/assets/img/1logo-small.png')}}">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal" style="font-size: 15px; font-weight: bold;color: #FF4720;">
            COFFEE GANG
        </a>
    </div>
    <div class="sidebar-wrapper" style="width:200px; font-family: ubuntu">
        <ul class="nav" style="margin-top: -10px;">
            <li style="margin-bottom: -10px;">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p style="color:#1A5276; font-weight: 700;">Dashboard</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/order">
                    <i class="nc-icon nc-box"></i>
                    <p style="color:#1A5276; font-weight: 700;">CREATE ORDER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/customer">
                    <i class="nc-icon nc-single-02"></i>
                    <p style="color:#1A5276; font-weight: 700;">CUSTOMER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/product">
                    <i class="nc-icon nc-box-2"></i>
                    <p style="color:#1A5276; font-weight: 700;">PRODUCT</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/addproduct">
                    <i class="nc-icon nc-bag-16"></i>
                    <p style="color:#1A5276; font-weight: 700;">ADD PRODUCT</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/stock">
                    <i class="nc-icon nc-shop"></i>
                    <p style="color:#1A5276; font-weight: 700;">STOCK</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/supplier">
                    <i class="nc-icon nc-paper"></i>
                    <p style="color:#1A5276; font-weight: 700;">SUPPLIER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/user">
                    <i class="nc-icon nc-single-02"></i>
                    <p style="color:#1A5276; font-weight: 700;">User Profile</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/expense">
                    <i class="nc-icon nc-money-coins"></i>
                    <p style="color:#1A5276; font-weight: 700;">EXPENSE</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/setupuser">
                    <i class="nc-icon nc-simple-add"></i>
                    <p style="color:#1A5276; font-weight: 700;">SETUP USER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/staff">
                    <i class="nc-icon nc-circle-10"></i>
                    <p style="color:#1A5276; font-weight: 700;">STAFF</p>
                </a>
            </li>
            <li style="margin-top: 0px;">
                <a href="#">
                    <i class="nc-icon nc-cloud-upload-94"></i>
                    <p style="color:#E74C3C; font-weight: 700;">LOG OUT</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel" style="width: 89%;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height:60px;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <form class="form-inline my-2 my-lg-0" style="float: right">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width:300px;">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
</div>
