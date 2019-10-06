
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
                                        @foreach($inovasi as $ino_data)                                        
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><a href="detail-innovation.html">{{$ino_data->name}}</a></td>
                                                <td>{{$ino_data->Institute->short_name}}</td>  
                                                <td> 
                                                @foreach($ino_data->innovation_step as $ino_step)                                
                                                    {{$ino_step->step->name}}
                                                @endforeach
                                                </td>
                                                <td>50%</td>
                                                <td>70%</td>
                                                <td>{{$ino_data->created_at}}</td>
                                                <td>{{$ino_data->updated_at}}</td>
                                            </tr>
                                        @endforeach         
                                    </tbody>
                                </table>
  </body>
</table>
</html>

<H2>I WON'T GIVE UP</H2>

