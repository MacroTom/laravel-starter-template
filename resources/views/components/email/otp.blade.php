<tr>
    <td class="otp-container">
        @foreach (str_split($otp) as $char)
            <table>
                <tr>
                    <td class="otp">
                        {{ $char }}
                    </td>
                </tr>
            </table>
        @endforeach
    </td>
</tr>
