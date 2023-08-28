@extends('aura::layouts.app')

@section('title', 'Users')

@section('content')

<div class="w-full overflow-x-auto p-2">
    <table class="w-full bg-white border border-gray-300">
        <thead>
            <tr>
                @foreach ($users->first()->getAttributes() as $columnName => $value)
                @if (!in_array($columnName, config('aura.models.user.exclude_columns')))
                <th class="p-2 text-left font-bold text-gray-700 bg-gray-100">{{ $columnName }}</th>
                @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="{{ $loop->odd ? 'bg-gray-100' : 'bg-white' }}">
                @foreach ($user->getAttributes() as $columnName => $value)
                @if (!in_array($columnName, config('aura.models.user.exclude_columns')))

                <td class="p-2">{{ $value }}</td>
                @endif
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


{{ $users->links() }}


@endsection