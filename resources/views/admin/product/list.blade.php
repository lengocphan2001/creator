@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Danh sách sản phẩm</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box mr-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm . . .">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-right">
                                            <button type="button"
                                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i
                                                    class="mdi mdi-plus mr-1"></i>Thêm mới</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Ảnh sản phẩm </th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá nhập</th>
                                                <th>Giá bán</th>
                                                <th>Số lượng</th>
                                                <th>Trạng thái</th>
                                                <th>Chi tiết</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch2">
                                                        <label class="custom-control-label" for="customSwitch2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch3">
                                                        <label class="custom-control-label" for="customSwitch3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch4">
                                                        <label class="custom-control-label" for="customSwitch4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch5">
                                                        <label class="custom-control-label" for="customSwitch5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch6">
                                                        <label class="custom-control-label" for="customSwitch6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://sixdo.vn/images/products/2023/small/_vqv5674-1679994484.jpg"
                                                        alt=""></td>
                                                <td>Váy lụa xòe</td>
                                                
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch7">
                                                        <label class="custom-control-label" for="customSwitch7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pagination-rounded justify-content-end mb-2">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <i class="mdi mdi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->
        <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="assets\images\product\img-7.png" alt=""
                                                    class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="assets\images\product\img-4.png" alt=""
                                                    class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Hoodie (Blue)</h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Sub Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Shipping:</h6>
                                        </td>
                                        <td>
                                            Free
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
