<?php

class GpcrDownstreamPathway extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $dataset;

    /**
     *
     * @var string
     */
    public $dependent_independent;

    /**
     *
     * @var string
     */
    public $GPCR_symbol;

    /**
     *
     * @var string
     */
    public $GPCR_uniprot;

    /**
     *
     * @var string
     */
    public $tissue_cell_line;

    /**
     *
     * @var string
     */
    public $cell_line_ID;

    /**
     *
     * @var double
     */
    public $GPCR_expresion_Zscore;

    /**
     *
     * @var double
     */
    public $GPCR_tissue_specificity;

    /**
     *
     * @var string
     */
    public $pathway;

    /**
     *
     * @var integer
     */
    public $pathway_size;

    /**
     *
     * @var double
     */
    public $pathway_pvalue;

    /**
     *
     * @var integer
     */
    public $id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("GPCR_downstream_pathway");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'GPCR_downstream_pathway';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GpcrDownstreamPathway[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GpcrDownstreamPathway
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
