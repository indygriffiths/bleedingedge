<?php

use SilverStripe\FullTextSearch\Solr\SolrIndex;
use SilverStripe\Security\Group;

class GroupIndex extends SolrIndex
{
    public function init()
    {
        $this->addClass(Group::class);
        $this->addFulltextField('Title');
        $this->addFulltextField('Description');
    }
}
