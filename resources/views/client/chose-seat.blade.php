@extends('client.template.master')
@section('header')
    <header class="page-header">
        <div class="container">
            <h1>Chọn hàng ghế</h1>
        </div>
    </header>
@show
@section('content')
    <section class="content-section" data-background="#ffffff">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-info-box">
                        <div class="col-lg-10">
                            <h5>Chọn ghế</h5>
                            <div class="row">
                                @php
                                    $row = 1;
                                @endphp
                                    @foreach ($seatList as $item)

                                        <div class="col-sm-1">
                                            @php
                                                $find = DB::table('detail_ticket_mv')->where('id_seat', $item->id_seat)->count();
                                            @endphp
                                            @if ($find > 0)
                                                <a href="#" disable class="btn btn-danger">{{ $item->seat_name }}</a>
                                            @else
                                                <a href="#" data-id-seat="{{ $item->id_seat }}" data-name-seat="{{ $item->seat_name }}" class="btn btn-success choseSeat">{{ $item->seat_name }}</a>
                                            @endif
                                        </div>
                                        @if ($item->seat_row > $row)
                                            @php
                                                $row++;
                                            @endphp
                                            <br>
                                        @endif
                                    @endforeach
                                {{-- @endforeach --}}

                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <h5>Rạp</h5>
                            @foreach ($branch as $item)
                                <a href="#" data-branch="{{ $item->id_branch }}" data-movie="{{ $movie->id_mv }}" class="btn btn-warning branch">{{ $item->branch_name }}</a>
                            @endforeach
                        </div> --}}
                        <div class="col-lg-12">
                            <h5>Ghế đã chọn</h5>
                            <div class="paymentItem row">
                                <ul>
                                    <li><strong>Vé: </strong><span class="tiketBuy"></span></li>
                                    <li><strong>Tổng tiền:</strong> <span class="tiketTotal"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="movie-info-box">
                        <form id="confirmSeat" method="post">
                            @csrf
                            <input type="text" name="seatChosed[]" hidden class="seatChosed">
                            <button type="submit" class="add-btn">+ XÁC NHẬN</button>
                        </form>
                        <button type="submit" class="add-btn" data-toggle="modal" data-target="#exampleModal">THANH TOÁN</button>
                    </div>
                    <!-- end movie-info-box -->
                </div>
                <!-- end col-8 -->
                <div class="col-lg-4">
                    <div class="movie-side-info-box">
                        <figure><img src="{{ asset($movie->image) }}" alt="Image"></figure>
                        <ul>
                            <li><strong>Khởi chiếu: </strong>{{ $movie->date_start }}</li>
                            <li><strong>Đạo diễn:</strong> {{ $movie->director }}</li>
                            <li><strong>Diễn viên:</strong> {{ $movie->perfomer }}</li>
                            <li><strong>Thời lượng:</strong> {{ $movie->timemv }}</li>
                        </ul>
                    </div>
                    <!-- end movie-side-info-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end col-12 -->
            <!-- end row -->
            <div class="row">

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    @push('booking')
        <script>
            $(document).ready(function () {
                const base_url = window.location.origin;
                const seat = [];
                const nameSeat = [];
                $('.choseSeat').click(function (e) {
                    e.preventDefault();
                    $(this).data('id-seat');
                    console.log($(this).data('id-seat'));
                    var seatID = $(this).data('id-seat');
                    var nameSeatItem = $(this).data('name-seat');
                    if(seat.includes(seatID)) {
                        // alert("da chon ghe nay roi");
                        removeElement(seat, seatID);
                        removeElement(nameSeatItem, nameSeat);
                        $(this).css('background-color','#28a745');
                    }else {
                        seat.push($(this).data('id-seat'));
                        nameSeat.push($(this).data('name-seat'));
                        $(this).css('background-color','red');
                    }
                    console.log(nameSeat);
                    $('.seatChosed').val(seat);
                });


                $("#confirmSeat").submit(function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                // var url = form.attr('action');
                $('.itemTiketBuy').remove();
                $('.itemTiketBuyTotal').remove();
                $.ajax({
                    type: "POST",
                    url: base_url+"/xac-nhan-ghe",
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data)
                        {
                            console.log(data);// show response from the php script.
                            data.seatInfo.forEach(e => {
                                nameSeat.push(e.seatName);
                            });
                            var content = '<span class="itemTiketBuy">'+ nameSeat +'</span>';
                            var totalPrice = '<span class="itemTiketBuyTotal">'+ new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(data.totalPrice) +'</span>';
                            $('.tiketBuy').append(content);
                            $('.tiketTotal').append(totalPrice);
                        },
                    error: function (data) {
                        console.log(data);
                      }
                    });
                });
            });

            function removeElement(array, elem) {
                var index = array.indexOf(elem);
                if (index > -1) {
                    array.splice(index, 1);
                }
            }
        </script>
    @endpush
@endsection
