<h2>{{\controller\projects::getProjnameByHash(@PARAMS.project)}} &raquo; Manage strings</h2>
<table>
    <thead>
        <tr>
            <th>String</th>
            <th>Added</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <F3:repeat group="{{@strings}}" value="{{@string}}">
        <tr>
            <td>{{@string.original}}</td>
            <td>{{date('d.m.y', @string.addedDate)}}</td>
            <td style="width: 100px;"><a href="#">Del</a> - <a href="#">Edit</a></td>
        </tr>
    </F3:repeat>
    </tbody>
</table>