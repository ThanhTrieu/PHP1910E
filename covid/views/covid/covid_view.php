<div class="row">
	<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
		<!--	so ca nhiem	-->
		<div class="card">
			<div class="card-header">
				So ca mac benh
			</div>
			<div class="card-body">
				<p class="card-text">Tong nhiem : <?= number_format($result['Global']['TotalConfirmed']); ?></p>
				<p class="card-text">Moi nhiem : <?= number_format($result['Global']['NewConfirmed']); ?> </p>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
		<!--	so ca tu vong	-->
		<div class="card">
			<div class="card-header">
				So ca Tu vong
			</div>
			<div class="card-body">
				<p class="card-text">Tu vong : <?= number_format($result['Global']['TotalDeaths']); ?></p>
				<p class="card-text">Moi chet : <?= number_format($result['Global']['NewDeaths']); ?></p>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
		<!--	so ca chua khoi	-->
		<div class="card">
			<div class="card-header">
				So ca Khoi
			</div>
			<div class="card-body">
				<p class="card-text">Tong Chua khoi : <?= number_format($result['Global']['TotalRecovered']); ?></p>
				<p class="card-text">Moi khoi : <?= number_format($result['Global']['NewRecovered']); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="row my-3">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	<!--  thong tin covid cua cac nuoc tren the gioi	-->
		<h3 class="text-center text-info">Danh sach cac nuoc tren the gioi</h3>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="3%">STT</th>
					<th>Ngay</th>
					<th>Quoc gia</th>
					<th>Tong so ca mac</th>
					<th>So ca moi mac</th>
					<th>Tong so chet</th>
					<th>Moi bi chet</th>
					<th>Tong khoi benh</th>
					<th>Moi khoi benh</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($result['Countries'] as $key => $item): ?>
				<tr>
					<td><?= $key+1; ?></td>
					<td><?= date('m/d/Y H:i:s', strtotime($item['Date'])); ?></td>
					<td><?= $item['Country']; ?></td>
					<td><?= number_format($item['TotalConfirmed']); ?></td>
					<td><?= number_format($item['NewConfirmed']); ?></td>
					<td><?= number_format($item['TotalDeaths']); ?></td>
					<td><?= number_format($item['NewDeaths']); ?></td>
					<td><?= number_format($item['TotalRecovered']); ?></td>
					<td><?= number_format($item['NewRecovered']); ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
