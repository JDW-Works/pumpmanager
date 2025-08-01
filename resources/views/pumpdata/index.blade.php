@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">PumpData 查詢</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">加密ID</th>
                    <th class="px-4 py-2 text-left">組織ID</th>
                    <th class="px-4 py-2 text-left">編號</th>
                    <th class="px-4 py-2 text-left">抽水機名稱</th>
                    <th class="px-4 py-2 text-left">財產機關</th>
                    <th class="px-4 py-2 text-left">管理機關</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($pumps as $pump)
                <tr>
                    <td class="px-4 py-2">{{ $pump->pd_id }}</td>
                    <td class="px-4 py-2">{{ $pump->pd_arg }}</td>
                    <td class="px-4 py-2">{{ $pump->o_id }}</td>
                    <td class="px-4 py-2">{{ $pump->pd_idno }}</td>
                    <td class="px-4 py-2">{{ $pump->pd_name }}</td>
                    <td class="px-4 py-2">{{ $pump->pd_proptyorg }}</td>
                    <td class="px-4 py-2">{{ $pump->pd_mngorg }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-2 text-center">無資料</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        {{ $pumps->links() }}
    </div>
</div>
@endsection
