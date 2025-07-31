@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">UserData 查詢</h1>
    <form method="get" class="mb-4 flex flex-col md:flex-row md:items-center gap-2">
        <input type="text" name="account" value="{{ $account }}" placeholder="搜尋帳號" class="border rounded p-2 md:w-1/3" />
        <input type="text" name="name" value="{{ $name }}" placeholder="搜尋名稱" class="border rounded p-2 md:w-1/3" />
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">搜尋</button>
        <a href="{{ route('userdata.index') }}" class="text-blue-500 ml-2">清除</a>
    </form>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">帳號</th>
                    <th class="px-4 py-2 text-left">名稱</th>
                    <th class="px-4 py-2 text-left">公司名稱</th>
                    <th class="px-4 py-2 text-left">狀態</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($users as $user)
                <tr>
                    <td class="px-4 py-2">{{ $user->u_idno }}</td>
                    <td class="px-4 py-2">{{ $user->u_name }}</td>
                    <td class="px-4 py-2">{{ $user->u_company }}</td>
                    <td class="px-4 py-2">{{ $user->u_status }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 text-center">無資料</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        {{ $users->links() }}
    </div>
</div>
@endsection
