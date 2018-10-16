@extends('mails.layouts.app')

@section('main')


    <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#232925">
        <tr>
            <td class="computer-image">
                <br>
                <br class="mobile-hide" />
                <img style="display:block;" width="224" height="213" src="https://www.filepicker.io/api/file/CoMxXSlVRDuRQWNwnMzV" alt="hello">
            </td>
            <td style="color: #ffffff;" class="header-text">
                <br>
                <br>
                <span style="font-size: 24px;">Good news!</span><br>
                We would like to inform you that your order has shipped! More details below.
                <br>
                <br>
                <div><!--[if mso]>
                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:150px;" stroke="f" fillcolor="#2b934f">
                        <w:anchorlock/>
                        <center>
                    <![endif]-->
                    <a href="{{ URL::to('/') }}/active/{{ $user->email }}/{{ $code }}"
                       style="background-color:#2b934f;color:#ffffff;display:inline-block;font-family:Helvetcia, sans-serif;font-size:16px;font-weight:light;line-height:40px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;">Active</a>
                    <!--[if mso]>
                    </center>
                    </v:rect>
                    <![endif]-->
                </div>
            </td>
        </tr>
    </table>


@endsection