@extends('frontend.master')

@section('title','Home')

@section('mainContent')

	@include('frontend.home.top_main_section')

	@include('frontend.home.deal_of_the_day_section')

	@include('frontend.home.trendy_products_section')

	@include('frontend.home.shop_by_categories_section')

	@include('frontend.home.recent_arrivals_section')

	@include('frontend.home.features_section')

	@include('frontend.home.blog_section')


@endsection
