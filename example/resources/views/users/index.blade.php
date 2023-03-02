<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>

<body>
    <div class="wrapper">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="container">
            <div class="flex-row toolbar-box">
                <div class="right-toolbar flex-row">
                    <a href="{{ route('users.create') }}"><button class="ms-button btn primary">
                            <div class="text pl-0">Thêm mới</div>
                        </button></a>
                </div>
            </div>
            <div>
                <table class="ms-table">
                    <thead class="ms-thead">
                        <tr class="ms-tr tr-1">
                            <th class="ms-th">
                                <div class="ms-th-content flex-row">
                                    <div>STT</div>
                                </div>
                            </th>
                            <th class="ms-th">
                                <div class="ms-th-content flex-row">
                                    <div>Họ và tên</div>
                                </div>
                            </th>
                            <th class="ms-th">
                                <div class="ms-th-content flex-row">
                                    <div>Email</div>
                                </div>
                            </th>
                            <th class="ms-th">
                                <div class="ms-th-content flex-row">
                                    <div>Số điện thoại</div>
                                </div>
                            </th>
                            <th class="ms-th">
                                <div class="ms-th-content flex-row">
                                    <div>Địa chỉ</div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="ms-tbody data">
                        @foreach ($data as $item)
                            <tr class="ms-tr  action-pointer">
                                <td class="ms-td ms-col-td ">
                                    {{ $item->id }}
                                </td>
                                <td class="ms-td ms-col-td ">
                                    {{ $item->name }}
                                </td>
                                <td class="ms-td ms-col-td ">
                                    {{ $item->email }}
                                </td>
                                <td class="ms-td ms-col-td ">
                                    {{ $item->phone }}
                                </td>
                                <td class="ms-td ms-col-td ">
                                    {{ $item->address }}
                                </td>
                                {{--
                                <td style="cursor: pointer" class="ms-td ms-col-td ">
                                    <form action="/delete" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="submit" value="Xóa">
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="ms-pagination flex-row">
                    {{ $data }}
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('js/user.js') }}"></script>

</html>
