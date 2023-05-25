<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Home')
<!-- вставляем контент -->
@section('content')





    <div class="container mb-5 mt-3" >
		<h2>Basket</h2>
		<table class="table table-hover" style="border: 1px solid gray; padding: 20px;">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Image</th>
					<th>Quantity</th>
					<th>Delete</th>
				</tr>
			</thead>
            @foreach($carts as $cart)
			<tbody class="my_table">
				<tr>
					<td>{{$cart->product->name}}</td>
					<td>{{$cart->product->price}} $</td>
					<td><img src="{{asset('images/'.$cart->product->image)}}" alt="" style="height: 200px;"></td>
                    <td>
                        <form action="{{ route('shop_update_cart', $cart) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="input-group">
                            <input type="number" class="form-control" name="quantety" value="{{ $cart->quantety }}" min="1" max="10">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-danger btn-my2"><i class="bi bi-arrow-repeat"></i></button>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('shop_delete_cart', $cart) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="del-button">
                                <button type="submit" class="btn btn-danger btn-my1"><i class="bi bi-trash"></i></button>
                            </div>
                        </form>
                    </td>
				</tr>
			</tbody>
            @endforeach
		</table>
		<div class="text-right">
			<h4>Total: {{$total}} $</h4>
		</div>
		<div class="text-right">
			<form action="{{route('shop_order_buy')}}" method="POST">
				@csrf
				<button type="submit" class="btn btn-success btn-my2">Buy</button>
			</form>
		</div>
	</div>


@endsection

