@extends('layouts.main')

@section('container')


{{-- menu --}}
<section id="menu" class="menu">
    <h2><span>Pembelanjaan</span> Kami</h2>
    <h1>Belanja Sesuai SPJ </h1>
    <h4>Design table 1</h4>

    <table class="table1">
        <tr>
            <th>No</th>
			<th>Uraian</th>
			<th>Debit</th>
			<th>Kredit</th>
			<th>Saldo</th>
            
		</tr>
		<tr>
            <td>1</td>
			<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae rerum voluptatem aliquid corrupti totam a excepturi eos molestias vel et officiis fugit saepe odit harum impedit repudiandae quo, veritatis vitae!</td>
			<td>800.000,00</td>
			<td>798.000</td>
			<td>798.000</td>
		</tr>
		<tr>
            <td>1</td>
			<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae rerum voluptatem aliquid corrupti totam a excepturi eos molestias vel et officiis fugit saepe odit harum impedit repudiandae quo, veritatis vitae!</td>
			<td>800.000,00</td>
			<td>-</td>
			<td>798.000</td>
		</tr>
		<tr>
            <td>1</td>
			<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae rerum voluptatem aliquid corrupti totam a excepturi eos molestias vel et officiis fugit saepe odit harum impedit repudiandae quo, veritatis vitae!</td>
			<td>-</td>
			<td>798.000</td>
			<td>798.000</td>
		</tr>
		<tr>
            <td>1</td>
			<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae rerum voluptatem aliquid corrupti totam a excepturi eos molestias vel et officiis fugit saepe odit harum impedit repudiandae quo, veritatis vitae!</td>
			<td>800.000,00</td>
			<td>798.000</td>
			<td>798.000</td>
		</tr>
		
    </table>
</section>	
{{-- menu end --}}

@endsection