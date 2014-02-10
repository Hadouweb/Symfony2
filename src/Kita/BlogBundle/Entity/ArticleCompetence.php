<?php

namespace Kita\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class ArticleCompetence
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Kita\BlogBundle\Entity\Article")
   */
  private $article;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Kita\BlogBundle\Entity\Competence")
   */
  private $competence;

  /**
   * @ORM\Column()
   */
  private $niveau; // Ici j'ai un attribut de relation « niveau »

  // … vous pouvez ajouter d'autres attributs bien entendu

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set article
     *
     * @param \Kita\BlogBundle\Entity\Article $article
     * @return ArticleCompetence
     */
    public function setArticle(\Kita\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Kita\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set competence
     *
     * @param \Kita\BlogBundle\Entity\Competence $competence
     * @return ArticleCompetence
     */
    public function setCompetence(\Kita\BlogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \Kita\BlogBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}
