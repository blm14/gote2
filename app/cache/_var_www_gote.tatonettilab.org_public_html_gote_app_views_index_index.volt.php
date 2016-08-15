<div class="page-header">
    <h1>Congratulations!</h1>
</div>

<p>You're now flying with Phalcon. Great things are about to happen!</p>

<p>This page is located at <code>views/index/index.volt</code></p>

<table id="variant_table">
<thead>
	<TR>
		<TH>dataset</TH>
		<TH>dependent_independent</TH>
		<TH>GPCR_symbol</TH>
		<TH>GPCR_uniprot</TH>
		<TH>tissue_cell_line</TH>
		<TH>cell_line_ID</TH>
		<TH>GPCR_expresion_Zscore</TH>
		<TH>GPCR_tissue_specificity</TH>
		<TH>pathway</TH>
		<TH>pathway_size</TH>
		<TH>pathway_pvalue</TH>
	</TR>
</THEAD>
<?php foreach ($pathways as $pathway) { ?>
<TR >
	<TD ><?php echo $pathway->dataset; ?></TD>
	<TD ><?php echo $pathway->dependent_independent; ?></TD>
	<TD ><?php echo $pathway->GPCR_symbol; ?></TD>
	<TD ><?php echo $pathway->GPCR_uniprot; ?></TD>
	<TD ><?php echo $pathway->tissue_cell_line; ?></TD>
	<TD ><?php echo $pathway->cell_line_ID; ?></TD>
	<TD ><?php echo $pathway->GPCR_expresion_Zscore; ?></TD>
	<TD ><?php echo $pathway->GPCR_tissue_specificity; ?></TD>
	<TD ><?php echo $pathway->pathway; ?></TD>
	<TD ><?php echo $pathway->pathway_size; ?></TD>
	<TD ><?php echo $pathway->pathway_pvalue; ?></TD>
</TR>
<?php } ?>
</tbody>
</table>

<script type="text/javascript">
$(document).ready( function () {
    $('#variant_table').DataTable();
} );
</script>