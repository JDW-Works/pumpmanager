@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">UserData 查詢</h1>
    <div class="mb-4">
        <a href="{{ route('userdata.create') }}" class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded-md">新增使用者</a>
    </div>
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="get" class="grid gap-4 md:grid-cols-3 items-end">
            <div>
                <label for="account" class="block text-sm font-medium text-gray-700">帳號</label>
                <input id="account" type="text" name="account" value="{{ $account }}" placeholder="搜尋帳號"
                    class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">名稱</label>
                <input id="name" type="text" name="name" value="{{ $name }}" placeholder="搜尋名稱"
                    class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
            </div>
            <div class="flex gap-2 col-span-full md:col-span-1 mt-2 md:mt-0">
                <button type="submit"
                    class="flex items-center justify-center gap-1 bg-indigo-800 hover:bg-indigo-900 text-white px-4 py-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span>搜尋</span>
                </button>
                <a href="{{ route('userdata.index') }}"
                    class="flex items-center justify-center gap-1 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>清除</span>
                </a>
            </div>
        </form>
    </div>
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
