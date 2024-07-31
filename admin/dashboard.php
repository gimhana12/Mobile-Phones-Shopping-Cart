<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>Eco Mobile Admin</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la Eco Mobile"></span><span>Eco Mobile</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="dashboard.html"class="active"><span class="las la-igloo"></span>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="add-Remove.php"><span class="las la-users"></span>
                            <span>Add or Remove</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-users"></span>
                            <span>Customers</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-clipboard-list"></span>
                            <span>Projects</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-shopping-bag"></span>
                            <span>Orders</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-receipt"></span>
                            <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-user-circle"></span>
                            <span>Accounts</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-clipboard-list"></span>
                            <span>Tasks</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
               <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
               </h2>
               <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search"placeholder="search here" />
               </div>
               <div class="user-wrapper">
                <img src="imges/4.jpg"width="40px"height="40px" alt="">
                <div>
                    <a href="login.php"><h5>Eco Admin</h5></a>
                </div>
            </div>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>Customers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>79</h1>
                            <span>Deals</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>124</h1>
                            <span>Orders</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>Rs.895000</h1>
                            <span>Income</span>
                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>
                    </div>

                </div>
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Deals</h3>
                                <button>see all <span class="las la-arrow-right">
                                </span></button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Mobile Phone</td>
                                                <td>Price</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Apple iphone 8</td>
                                                <td>Rs.50000</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                    review
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td>Apple iphone 7+</td>
                                                <td>Rs.62000</td>
                                                <td>
                                                    <span class="status pink"></span>
                                                    in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Samsung Galaxy M22</td>
                                                <td>Rs.80000</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                    pending
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Apple iphone 8</td>
                                                <td>Rs.50000</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                    review
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td>Apple iphone 7+</td>
                                                <td>Rs.62000</td>
                                                <td>
                                                    <span class="status pink"></span>
                                                    in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Samsung Galaxy A30</td>
                                                <td>Rs.35000</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                    pending
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Apple iphone 13</td>
                                                <td>Rs.85000</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                    review
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td>Huawei norva 2i</td>
                                                <td>Rs.37000</td>
                                                <td>
                                                    <span class="status pink"></span>
                                                    in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Oppo F9</td>
                                                <td>Rs.95000</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                    pending
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>New Customer</h3>

                                <button>see all <span class="las la-arrow-right">
                                </span></button>
                            </div>
                            <div class="card-body">
                                <div class="Customer">
                                    <div class="info">
                                        <img src="imges/2.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Gimhana Charith</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-Comment"></span>
                                        <span class="las la-Phone"></span>
                                    </div>
                                </div>
                        <div class="Customer">
                            <div>
                                <img src="imges/2.jpg" width="40px" height="40px" alt="">
                            <div>
                                <h4>Sahna</h4>
                                <small>CEO Excerpt</small>
                            </div>
                        </div>
                        <div>
                            <span class="las la-user-circle"></span>
                            <span class="las la-Comment"></span>
                            <span class="las la-Phone"></span>
                        </div>
                    </div>
                    <div class="Customer">
                        <div>
                            <img src="imges/2.jpg" width="40px" height="40px" alt="">
                        <div>
                            <h4>Zenas</h4>
                            <small>CEO Excerpt</small>
                        </div>
                    </div>
                    <div>
                        <span class="las la-user-circle"></span>
                        <span class="las la-Comment"></span>
                        <span class="las la-Phone"></span>
                    </div>
                </div>
                <div class="Customer">
                    <div>
                        <img src="imges/2.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Dulmini</h4>
                        <small>CEO Excerpt</small>
                    </div>
                </div>
                <div>
                    <span class="las la-user-circle"></span>
                    <span class="las la-Comment"></span>
                    <span class="las la-Phone"></span>
                </div>
                <div class="Customer">
                    <div>
                        <img src="imges/2.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>imla</h4>
                        <small>CEO Excerpt</small>
                    </div>
                </div>
                <div>
                    <span class="las la-user-circle"></span>
                    <span class="las la-Comment"></span>
                    <span class="las la-Phone"></span>
                </div>
                <div class="Customer">
                    <div>
                        <img src="imges/2.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Samera</h4>
                        <small>CEO Excerpt</small>
                    </div>
                </div>
                <div>
                    <span class="las la-user-circle"></span>
                    <span class="las la-Comment"></span>
                    <span class="las la-Phone"></span>
                </div>
            </div>
            <div class="Customer">
                <div>
                    <img src="imges/2.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Ravishka</h4>
                    <small>CEO Excerpt</small>
                </div>
            </div>
            <div>
                <span class="las la-user-circle"></span>
                <span class="las la-Comment"></span>
                <span class="las la-Phone"></span>
            </div>
        </div>
                    </div>
                </div>
            </div>
                </div>
            </main>
        </div>

    </body>
</html>