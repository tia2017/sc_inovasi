<!DOCTYPE html>
<html>
<head>
    <title>aa</title>
</head>
<body>
    aaaaaaaaaaaaa
    <table id="advanced_table" class="table">
                                    <thead>
                                        <tr>
                                            <th class="nosort" width="10">
                                                <label class="custom-control custom-checkbox m-0">
                                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </th>
                                            <th class="nosort">Inovasi</th>
                                            <th>Perangkat Daerah</th>
                                            <th>Tahapan</th>
                                            <th>Progres</th>
                                            <th>Total Progres</th>
                                            <th>Tanggal Buat</th>
                                            <th>Tanggal Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>                            
                                        @foreach($roles as $role_data)                                        
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><a href="detail-innovation.html">{{$role_data->name}}</a></td>
                                                <td>{{$role_data->id}}</td>  
                                                <td> 

                                                </td>
                                                <td>50%</td>
                                                <td>70%</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach         
                                    </tbody>
                                </table>
</body>
</html>