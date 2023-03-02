<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/users/create.css') }}">
</head>

<body>
    <div class="wrapper-create">
        <div class="container popup-content">
            <div>
                <a href="{{ route('users.index') }}">
                    << Quay lại</a>

                        <h1>ADD USER</h1>
            </div>
            <div class="">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Email
                            <span class="required">*</span>
                        </label>
                        <div class="flex">
                            <div class="ms-input ms-editor w-100">
                                <div class="flex-row border @error('email') error @enderror">
                                    <input type="text" class="ms-input-item flex" placeholder="Nhập email"
                                        name="email" value="{{ old('email') }}">
                                    <div class="icon24 error error-icon has-tooltip">
                                    </div>
                                </div>
                                <div class="error-text">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Họ và tên
                            <span class="required">*</span>
                        </label>
                        <div class="flex">
                            <div class="ms-input ms-editor w-100">
                                <div class="flex-row border @error('name') error @enderror">
                                    <input type="text" class="ms-input-item flex" placeholder="Họ và tên"
                                        name="name" value="{{ old('name') }}">
                                    <div class="icon24 error error-icon has-tooltip">
                                    </div>
                                </div>
                                <div class="error-text">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Địa chỉ
                            <span class="required">*</span>
                        </label>
                        <div class="flex">
                            <div class="ms-input ms-editor w-100">
                                <div class="flex-row border @error('address') error @enderror">
                                    <input type="text" class="ms-input-item flex" name="address"
                                        placeholder="Địa chỉ" value="{{ old('address') }}">
                                    <div class="icon24 error error-icon has-tooltip">
                                    </div>
                                </div>
                                <div class="error-text">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Số điện thoại
                            <span class="required">*</span>
                        </label>
                        <div class="flex">
                            <div class="ms-input ms-editor w-100">
                                <div class="flex-row border @error('phone') error @enderror">
                                    <input type="text" class="ms-input-item flex" placeholder="Số điện thoại"
                                        name="phone" value="{{ old('phone') }}">
                                    <div class="icon24 error error-icon has-tooltip">
                                    </div>
                                </div>
                                <div class="error-text">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Mật khẩu
                            <span class="required">*</span>
                        </label>
                        <div class="flex">
                            <div class="ms-input ms-editor w-100">
                                <div class="flex-row border @error('password') error @enderror">
                                    <input type="password" class="ms-input-item flex" placeholder="Password"
                                        name="password" value="{{ old('password') }}">
                                    <div class="icon24 error error-icon has-tooltip">
                                    </div>
                                </div>
                                <div class="error-text">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group slide-detail">
                        <label for="" class="form-group-label d-flex">
                            Xác nhận mật khẩu
                            <span class="required">*</span>
                        </label>
                        <div class="flex">
                            <div class="ms-input ms-editor w-100">
                                <div class="flex-row border @error('confirm_password') error @enderror">
                                    <input type="password" class="ms-input-item flex" placeholder="Xác nhận mật khẩu"
                                        name="confirm_password" value="{{ old('confirm_password') }}">
                                    <div class="icon24 error error-icon has-tooltip">
                                    </div>
                                </div>
                                <div class="error-text">
                                    @error('confirm_password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup-footer">
                        <div class="flex-row">
                            <div class="flex"></div>
                            <div class="flex-rtl">
                                <button class="ms-button btn primary has-tooltip" type="submit">
                                    <div class="text">Lưu</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
