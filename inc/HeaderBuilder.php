<?php

namespace inc;

class HeaderBuilder
{

    private string $title;
    private string $subtitle = "";
    private bool $displayFeaturedPlugin = false;
    private bool $background = false;
    private string $featured = "additions";

    private string $metaLink;
    private string $metaDescription = "GaagjesCraft Network Team (GCNT) is dedicated to the free, premium and 
custom spigot/bukkit plugins with attention to easy usability, optimised code, and great features";
    private array $cssLinks = [];

    /**
     * @param string $title Title of the web page.
     * @param string $metaLink Link to the web page.
     */
    public function __construct(string $title, string $metaLink)
    {
        $this->title = $title;
        $this->metaLink = $metaLink;
    }

    public function addCustomCSS(string $link): HeaderBuilder {
        $this->cssLinks[] = $link;
        return $this;
    }

    public function metaDescription(string $metaDescription): HeaderBuilder {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    public function subtitle(string $subtitle): HeaderBuilder
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    public function displayFeaturedPlugin(bool $display): HeaderBuilder {
        $this->displayFeaturedPlugin = $display;
        return $this;
    }

    public function background(bool $display): HeaderBuilder {
        $this->background = $display;
        return $this;
    }

    public function featured(string $featured): HeaderBuilder {
        $this->featured = $featured;
        return $this;
    }

    private function getDisplayTitle(): string {
        if ($this->title === "GaagjesCraft Network Team" && $this->subtitle !== "") {
            return $this->subtitle . " - GCNT";
        } else if ($this->subtitle !== "") {
            return $this->subtitle . " - " . $this->title . " | GCNT";
        } else {
            return $this->title . " - GCNT";
        }
    }

    public function build(): void {
        $featuredName = "AdditionsPlus";
        $featuredLink = "https://www.gcnt.net/ap";
        $featuredDescription = "Customize your server - Custom menus, commands, tablists, events, items and much more!";
        if ($this->featured == "streakrewards") {
            $featuredName = "StreakRewards";
            $featuredLink = "https://www.gcnt.net/sr";
            $featuredDescription = "The best daily streaked reward system for your server!";
        } else if ($this->featured == "skywarsreloaded") {
            $featuredName = "SkyWarsReloaded";
            $featuredLink = "https://www.gcnt.net/swr";
            $featuredDescription = "The most popular and configurable Skywars  plugin available!";
        }

        $title = $this->title;
        $subtitle = $this->subtitle;
        $displayFeaturedPlugin = $this->displayFeaturedPlugin;
        $background = $this->background;
        $metaDescription = $this->metaDescription;
        $metaLink = $this->metaLink;
        $displayTitle = $this->getDisplayTitle();
        $cssLinks = $this->cssLinks;

        require "/var/www/html/inc/header.php";
    }


}