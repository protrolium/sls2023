<?php namespace ProcessWire;
class DefaultPage extends Page {

    public function getShowByArtist() {
        return $this->wire()->pages->get("template!=nft, (template=concert-visuals|music-videos|broadcast|virtual-reality|brands|cinema), sort=-date, artist.name='{$this->name}'");
    }
    
}