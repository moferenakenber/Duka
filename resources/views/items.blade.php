@extends('layouts.user_type.auth')

@section('content')
{{--
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8">
<title>Yewbdar Stationery</title>
<link rel="stylesheet" href="dashboard.css"/>--}}
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>Items</h2>
        </div>
        <div class="user--info">
            <div class="search--box">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="search">
            </div>
            <!--user image-->
        </div>
        <a href="additempage" class="additem">+</a>
    </div>
</div>

@endsection
