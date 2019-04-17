package model;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;

/**Klasse für die Bezeichnung der Gerichte und dessen ID */
//@XmlRootElement(name = "essen")
public class Gericht {
public Gericht(){}

/** Attribut für die ID */

    private int id;

    /** getter & setter für die Attribut Art, Allergen, Gericht, Preis*/
    @XmlElement
    public String getArt() {
        return art;
    }

    public void setArt(String art) {
        this.art = art;
    }
    @XmlElement
    public String getAllergen() {
        return allergen;
    }

    public void setAllergen(String allergen) {
        this.allergen = allergen;
    }

    private String art;
    private String allergen;
    @XmlElement
    public String getGericht() {
        return gericht;
    }

    public void setGericht(String gericht) {
        this.gericht = gericht;
    }
    @XmlElement
    public double getPreis() {
        return preis;
    }

    public void setPreis(double preis) {
        this.preis = preis;
    }

    private String gericht;
    private double preis;

    /** Konstruktor*/
    public Gericht(String name, int id, double preis,String art,String allergen) {
        this.gericht = name;
        this.id = id;
        this.preis=preis;
        this.art=art;
        this.allergen=allergen;
    }
    /** Gibt die Gericht-Id zurück */
    @XmlElement
    public int getId() {
        return id;
    }

    /** Gibt das Gericht aus */
    @Override
    public String toString() {
        return "id:"+id+" " +gericht+"\n";
    }




}
