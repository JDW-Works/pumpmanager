@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">UserData 查詢</h1>
    <form method="get" class="mb-4">
        <input type="text" name="q" value="{{ $search }}" placeholder="搜尋使用者..." class="border rounded p-2 w-full md:w-1/3" />
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
                @foreach($users as $user)
                <tr>
                    <td class="px-4 py-2">{{ $user->u_idno }}</td>
                    <td class="px-4 py-2">{{ $user->u_name }}</td>
                    <td class="px-4 py-2">{{ $user->u_company }}</td>
                    <td class="px-4 py-2">{{ $user->u_status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $users->withQueryString()->links() }}
    </div>
</div>
@endsection
