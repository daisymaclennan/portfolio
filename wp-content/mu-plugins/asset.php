<?php

class Asset
{
  private $asset;

  public function __construct($asset)
  {
    $this->asset = $asset;
  }

  public function __invoke()
  {
    $manifest = $this->getManifest();

    if($manifest && isset($manifest[$this->asset])) {
      if($this->exists($manifest[$this->asset])) {
        return $this->url($manifest[$this->asset]);
      }
    }

    if($this->exists($this->asset)) {
      return $this->url($this->asset);
    }

    throw new \Exception('Asset `' . $asset . '` does not exist.');
  }

  private function exists($asset)
  {
    return file_exists(DIST_PATH . '/' . $asset);
  }

  private function getManifest()
  {
    if(!file_exists(ASSET_MANIFEST_PATH)) {
      return;
    }

    $manifest = file_get_contents(ASSET_MANIFEST_PATH);
    return json_decode($manifest, true);
  }

  private function url($asset)
  {
    return wp_make_link_relative(get_template_directory_uri()) . '/' . DIST_DIR . '/' . $asset;
  }
}
