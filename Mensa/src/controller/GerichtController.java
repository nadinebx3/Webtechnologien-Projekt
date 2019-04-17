package controller;

import model.*;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import java.util.ArrayList;


@Path("/gerichte")

/** MensaDB-Objekt wird angelegt */

public class GerichtController {

    private MensaDB db = new MensaDB();

    /** hiermit wird die Datenbank zurück gegeben */
    @GET
    public ArrayList<Gericht> getGerichte(){
        return db.getGerichte();
    }

    /** http-getMethode holt von der Datenbank die ID & gibt diese in der URL zurück */
    @GET
    @Path("/{id}")
    public Gericht getGericht(@PathParam("id") int id){
        return db.getGericht(id);
    }

}
