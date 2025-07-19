<x-email.layout>
    <x-slot:header>
        <x-email.header/>
    </x-slot:header>

    {{-- body --}}
    <tr>
        <td class="content">
            <table width="100%">
                {{ $slot }}
            </table>
        </td>
    </tr>

    <x-slot:subcopy>
        {{ $subcopy ?? '' }}
    </x-slot:subcopy>

    <x-slot:footer>
        <x-email.footer/>
    </x-slot:footer>
</x-email.layout>
