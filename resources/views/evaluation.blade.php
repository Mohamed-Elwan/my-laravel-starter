@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
                <div class="prop"></div> <!-- CSS hack to guarantee minumum height of content division -->
                <h2>Evaluation</h2>
                <p>This is how your PowerPoint Presentation will be evaluated. P0ssible Total Points = <strong>30</strong></p>
                <table width="98%" border="1" align="left" cellpadding="5" cellspacing="0" class="rubric">
                    <tbody>
                    <tr>
                        <th width="20%">&nbsp;</th>
                        <th bgcolor="#ff9999" width="18%">Beginning<br>
                            1-2</th>
                        <th bgcolor="#ffcc99" width="18%">Developing<br>
                            3</th>
                        <th bgcolor="#ffffcc" width="18%">Qualified<br>
                            4</th>
                        <th bgcolor="#ccffcc" width="18%">Exemplary<br>
                            5</th>
                        <th bgcolor="#ccccff">Score<br>
                            <br></th></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">History and defining the field</th>
                        <td align="center" height="3"></td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3">.</td>
                        <td align="center" height="3"><br>
                        </td></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">Theories of Development and Learning</th>
                        <td align="center" height="3"></td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">Theories of Intelligence</th>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">Emotional Intelligence</th>
                        <td align="center" height="3"></td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">Implications of the studied Topics</th>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">Presentation and Creativity</th>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td></tr>
                    <tr>
                        <th align="center" bgcolor="#cccccc" width="20%">Total Score</th>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td>
                        <td align="center" height="3"><br>
                        </td></tr></tbody></table>
                <div class="clear"></div><!-- CSS hack to guarantee minumum height of content division -->
        </div>
    </div>
</div>
@endsection
