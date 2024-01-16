{{-- <!DOCTYPE html>
<html>
<head>
    <title>Employment Agency Tool </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-8"><h1>Employment Agency Tool</h1></div>
    <div class="col-md-4 text-align-center"><p class="text-right mb-0">Date: {{ date('d/m/Y') }}</p></div>
    </div>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>

    <table class="table table-bordered table-striped table-hover table-condensed mb-0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach(users as user)
            @if (user->id %2  == 0)
            <tr>
                <td>{{ user->id }}</td>
                <td>{{ user->name }}</td>
                <td>{{ user->email }}</td>
            </tr>
            @endif
        @endforeach
    </table>
    <table width="100%">
        <tr>
            <td valign="top"><img src="{{asset('images/meteor-logo.png')}}" alt="" width="150"/></td>
            <td align="right">
                <h3>Shinra Electric power company</h3>
                <pre>
                    Company representative name
                    Company address
                    Tax ID
                    phone
                    fax
                </pre>
            </td>
        </tr>

      </table>


</body>
</html> --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">

                        <div class="row p-4">
                            <div class="col-md-9">
                                <h3 class="fw-bold mb-4">Invoice: Lezeco-00335 </h3>
                                <div class="row g-4">
                                    <div class="col-md-6 col-6">
                                        <p class="text-muted mb-1 text-uppercase fw-medium fs-14">Invoice No</p>
                                        <h5 class="fs-16 mb-0">#VL<span id="invoice-no">25000355</span></h5>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6 col-6">
                                        <p class="text-muted mb-1 text-uppercase fw-medium fs-14">Date</p>
                                        <h5 class="fs-16 mb-0"><span id="invoice-date">23 Nov, 2021</span> <small class="text-muted" id="invoice-time">02:36PM</small></h5>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6 col-6">
                                        <p class="text-muted mb-1 text-uppercase fw-medium fs-14">Payment Status</p>
                                        <span class="badge bg-success-subtle text-success fs-11" id="payment-status">Paid</span>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6 col-6">
                                        <p class="text-muted mb-1 text-uppercase fw-medium fs-14">Total Amount</p>
                                        <h5 class="fs-16 mb-0"><span id="total-amount">755.96</span></h5>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-sm-0 mt-3">
                                    <div class="mb-4">
                                        <img src="assets/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                        <img src="assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="17">
                                    </div>
                                    <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                    <p class="text-muted mb-1" id="address-details">California, United States</p>
                                    <p class="text-muted mb-1" id="zip-code"><span>Zip-code:</span> 90201</p>
                                    <h6><span class="text-muted fw-normal">Email:</span><span id="email">Invoika@themesbrand.com</span></h6>
                                    <h6><span class="text-muted fw-normal">Website:</span> <a href="https://themesbrand.com/" class="link-primary" target="_blank" id="website">www.themesbrand.com</a></h6>
                                    <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no"> +(01) 234 6789</span></h6>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="row p-4 border-top border-top-dashed">
                            <div class="col-md-9">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                        <p class="fw-medium mb-2" id="billing-name">David Nichols</p>
                                        <p class="text-muted mb-1" id="billing-address-line-1">305 S San Gabriel Blvd</p>
                                        <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">(123) 456-7890</span></p>
                                        <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">12-3456789</span> </p>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6">
                                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                                        <p class="fw-medium mb-2" id="shipping-name">David Nichols</p>
                                        <p class="text-muted mb-1" id="shipping-address-line-1">305 S San Gabriel Blvd</p>
                                        <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">(123) 456-7890</span></p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div><!--end col-->

                            <div class="col-md-3">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Total Amount</h6>
                                <h3 class="fw-bold mb-2">755.96</h3>
                                <span class="badge bg-success-subtle text-success fs-12">Due Date: 23 Des, 2022</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body p-4">
                                    <div class="table-responsive">
                                        <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr class="table-active">
                                                    <th scope="col" style="width: 50px;">#</th>
                                                    <th scope="col">Product Details</th>
                                                    <th scope="col">Rate</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col" class="text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody id="products-list">
                                                <tr>
                                                    <th scope="row">01</th>
                                                    <td class="text-start">
                                                        <span class="fw-medium">Sweatshirt for Men (Pink)</span>
                                                        <p class="text-muted mb-0">Graphic Print Men &amp; Women Sweatshirt</p>
                                                    </td>
                                                    <td>119.99</td>
                                                    <td>02</td>
                                                    <td class="text-end">239.98</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">02</th>
                                                    <td class="text-start">
                                                        <span class="fw-medium">Noise NoiseFit Endure Smart Watch</span>
                                                        <p class="text-muted mb-0">32.5mm (1.28 Inch) TFT Color Touch Display</p>
                                                    </td>
                                                    <td>94.99</td>
                                                    <td>01</td>
                                                    <td class="text-end">94.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">03</th>
                                                    <td class="text-start">
                                                        <span class="fw-medium">350 ml Glass Grocery Container</span>
                                                        <p class="text-muted mb-0">Glass Grocery Container (Pack of 3, White)</p>
                                                    </td>
                                                    <td>24.99</td>
                                                    <td>01</td>
                                                    <td class="text-end">24.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">04</th>
                                                    <td class="text-start">
                                                        <span class="fw-medium">Fabric Dual Tone Living Room Chair</span>
                                                        <p class="text-muted mb-0">Chair (White)</p>
                                                    </td>
                                                    <td>340.00</td>
                                                    <td>01</td>
                                                    <td class="text-end">340.00</td>
                                                </tr>
                                            </tbody>
                                        </table><!--end table-->
                                    </div>
                                    <div class="border-top border-top-dashed mt-2">
                                        <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-end">699.96</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax (12.5%)</td>
                                                    <td class="text-end">44.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount <small class="text-muted">(Invoika15)</small></td>
                                                    <td class="text-end">- 53.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge</td>
                                                    <td class="text-end">65.00</td>
                                                </tr>
                                                <tr class="border-top border-top-dashed fs-15">
                                                    <th scope="row">Total Amount</th>
                                                    <th class="text-end">755.96</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>


                                </div>
                                <!--end card-body-->
                            </div><!--end col-->
                        </div>

            </div>
            <!--end col-->
        </div>
    </div>


</body>
</html> --}}

{{-- second ends --}}

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>

  <table width="100%">
    <tr>
        <td valign="top"><img src="" alt="" width="150"/></td>
        <td align="right">
            <h3>Shinra Electric power company</h3>
            <pre>
                Company representative name
                Company address
                Tax ID
                phone
                fax
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>From:</strong> Linblum - Barrio teatral</td>
        <td><strong>To:</strong> Linblum - Barrio Comercial</td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price </th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Playstation IV - Black</td>
        <td align="right">1</td>
        <td align="right">1400.00</td>
        <td align="right">1400.00</td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Metal Gear Solid - Phantom</td>
          <td align="right">1</td>
          <td align="right">105.00</td>
          <td align="right">105.00</td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Final Fantasy XV - Game</td>
          <td align="right">1</td>
          <td align="right">130.00</td>
          <td align="right">130.00</td>
      </tr>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal </td>
            <td align="right">1635.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax </td>
            <td align="right">294.3</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total </td>
            <td align="right" class="gray"> 1929.3</td>
        </tr>
    </tfoot>
  </table>

</body>
</html>


{{-- third ends  --}}


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aloha!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container" style="width: 1000px">
        <div class="row ">
            <div class="col-md-6">
                <img src="" alt="" width="150">
            </div>
            <div class="col-md-6 text-right">
                <h3>Shinra Electric power company</h3>
                <address>
                    Company representative name<br>
                    Company address<br>
                    Tax ID<br>
                    Phone<br>
                    Fax
                </address>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <strong>From:</strong> Linblum - Barrio teatral
            </div>
            <div class="col-md-6">
                <strong>To:</strong> Linblum - Barrio Comercial
            </div>
        </div>

        <br>

        <table class="table">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price </th>
                    <th>Total </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Playstation IV - Black</td>
                    <td class="text-right">1</td>
                    <td class="text-right">1400.00</td>
                    <td class="text-right">1400.00</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Metal Gear Solid - Phantom</td>
                    <td class="text-right">1</td>
                    <td class="text-right">105.00</td>
                    <td class="text-right">105.00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Final Fantasy XV - Game</td>
                    <td class="text-right">1</td>
                    <td class="text-right">130.00</td>
                    <td class="text-right">130.00</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td class="text-right">Subtotal </td>
                    <td class="text-right">1635.00</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td class="text-right">Tax </td>
                    <td class="text-right">294.3</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td class="text-right">Total </td>
                    <td class="text-right bg-light"> 1929.3</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}
