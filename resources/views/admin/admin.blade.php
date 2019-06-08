@extends('layouts.admin')

@section('content')
	<div>
		<div class="stack">
			<div class="fl-right"><a href="#addbus" class="turner insert-form round-button" title="{{ trans('dictionary.h1_bus_add') }}">+</a></div>
			<div class="h2"><h2>{{ trans('dictionary.h1_bussteak') }}</h2></div>
			<div class="search" id="bus-stack">
				<input type="text" name="search" value="" placeholder="{{ trans('dictionary.search_bus_plh') }}">
				<a href="#">{{ trans('dictionary.search_find') }}</a>
			</div>
			<div class="bus-stack">
				<h2>{{ trans('dictionary.h1_bus_add') }}</h2>
				<input type="hidden" name="bus[hash]" value="{{ trans('dictionary.hash') }}">
				<label>
					<span>{{ trans('dictionary.bus_type_info') }}</span>
					<select name="bus[type]">
						<option value="444555" selected>Автобус №444555</option>
						<option value=111222">Автобус №111222</option>
					</select>
				</label>
				<label><span>{{ trans('dictionary.bus_number_info') }}</span>
					<input type="text" name="bus[number]" value="40"></label>
				<label><span>{{ trans('dictionary.bus_type_info') }}</span>
					<input type="text" name="bus[tariff]" value="СПб город 40р"></label>
				<label class="go-on">
					<a href="#" class="art-button btn-large">{{ trans('dictionary.add') }}</a>
				</label>
			</div>
		</div>
		<div class="popup add-bus-form" id="addbus">
			<div class="active-form" id="bus">
			</div>
		</div>
	</div>
	<div>
		<div class="stack">
			<div class="fl-right">
				<a href="#addcustomer" class="turner insert-form round-button" title="{{ trans('dictionary.h1_customer_add') }}">+</a>
			</div>
			<div class="h2"><h2>{{ trans('dictionary.h1_customersteak') }}</h2></div>
			<div class="search" id="customer-stack">
				<input type="text" name="search" value="" placeholder="{{ trans('dictionary.search_customer_plh') }}">
				<a href="#">{{ trans('dictionary.search_find') }}</a>
			</div>
			<div class="customer-stack">
				<h2>{{ trans('dictionary.h1_customer_add') }}</h2>
				<input type="hidden" name="customer[id]" value="1112547888">
				<label><span>{{ trans('dictionary.nic_plh') }}</span><input type="text" name="customer[nic]" value="{{ nic }}"></label>
				<label><span>{{ trans('dictionary.passw2_plh') }}</span><input type="text" name="customer[passw]" value=""></label>
				<label>
					<span>{{ trans('dictionary.customer_role_info') }}</span>
					<select name="customer[role]">
						<option value="444555" selected>Кондуктор</option>
						<option value=111222">Администратор</option>
					</select>
				</label>
				<label class="go-on">
					<a href="#" class="art-button btn-large">{{ trans('dictionary.add') }}</a>
				</label>
			</div>
		</div>
		<div class="popup add-customer-form" id="addcustomer">
			<div class="active-form" id="customer">
			</div>
		</div>
	</div>
@endsection