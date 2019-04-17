package controller;

import model.Gericht;

import java.util.ArrayList;

/** MensaDB als Datenbank-Ersatz  */

public class MensaDB {

    /** ArrayListe von Gericht */
    private ArrayList<Gericht> gerichte = new ArrayList<>();

    public MensaDB(){
        gerichte.add(new Gericht("Paniertes Schweineschnitzel mit Champignonrahmsoße und Pommes Frites",
                                 0,2.55,"Schwein","Ei, Gluten, Milch, Sellerie, Senf"));
        gerichte.add(new Gericht("Hühnerfrikassee mit Reis",1,2.55,"Geflügel","Gluten, Milch"));
        gerichte.add(new Gericht("Makkaroni Tomatenauflauf mit Basilikumsöße",2,3.12,"Vegetarisch",
                "Ei, Gluten, Milch"));
        gerichte.add(new Gericht("Putensteak, Kräuterbutter Broccoli, Tomaten-Gnocchi ",3,4.99,
                "Geflügel","Ei, Gluten, Milch"));
        gerichte.add(new Gericht("Asiatischer Nudelsalat, Hähnchen Crossies",4,2.35,"Geflügel",
                "Ei,Gluten, Laktosefrei, Soja"));
        gerichte.add(new Gericht("Spaghetti, Bolognese, Hartkäse",5,2.95,"Rind",
                "Gluten, Milch"));
        gerichte.add(new Gericht("Deutscher Spargel, zerlassene Butter und Salzkartoffeln ",6,4.15,"Vegetarisch",
                "Milch"));
        gerichte.add(new Gericht("Mexikanisches Gemüse, gebratene Zucchini und Kartoffelgratin",7,2.99,"Vegetarisch",
                "Ei, Gluten, Milch, Sellerie"));
        gerichte.add(new Gericht("Kartoffelsuppe",8,1.45,"Vegan",
                "Laktosefrei, Sellerie"));
        gerichte.add(new Gericht("Rindergulasch",9,3.15,"Rind",
                "Gluten, Milch"));
        gerichte.add(new Gericht("Möhreneintopf",10,1.45,"Fleischlos",
                "Milch"));

    }

    /** getMethode der ArrayListe */

    public ArrayList<Gericht> getGerichte(){
        return gerichte;
    }

    /** getMethode für die Gerichte zusätzlich der ID */
    public Gericht getGericht(int id){
        return gerichte.get(id);
    }

}
