@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">新增使用者</h1>
    <form method="post" action="{{ route('userdata.store') }}" class="bg-white p-4 rounded shadow grid gap-4 md:grid-cols-2">
        @csrf
        <div>
            <label for="u_idno" class="block text-sm font-medium text-gray-700">帳號</label>
            <input id="u_idno" name="u_idno" type="text" value="{{ old('u_idno') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>
        <div>
            <label for="u_name" class="block text-sm font-medium text-gray-700">名稱</label>
            <input id="u_name" name="u_name" type="text" value="{{ old('u_name') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>
        <div>
            <label for="u_passwd" class="block text-sm font-medium text-gray-700">密碼</label>
            <input id="u_passwd" name="u_passwd" type="password" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>
        <div>
            <label for="u_company" class="block text-sm font-medium text-gray-700">公司名稱</label>
            <input id="u_company" name="u_company" type="text" value="{{ old('u_company') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div>
            <label for="u_status" class="block text-sm font-medium text-gray-700">狀態</label>
            <select id="u_status" name="u_status" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="1" {{ old('u_status')=='1' ? 'selected' : '' }}>啟用</option>
                <option value="0" {{ old('u_status')=='0' ? 'selected' : '' }}>停用</option>
            </select>
        </div>
        <div class="md:col-span-2 flex gap-2">
            <button type="submit" class="bg-cyan-700 hover:bg-cyan-800 text-white px-4 py-2 rounded-md">儲存</button>
            <a href="{{ route('userdata.index') }}" class="bg-cyan-600 hover:bg-cyan-700 text-white px-4 py-2 rounded-md">取消</a>
        </div>
    </form>
</div>
@endsection
