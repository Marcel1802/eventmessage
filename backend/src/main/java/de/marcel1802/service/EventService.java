package de.marcel1802.service;

import de.marcel1802.entities.Event;

import javax.enterprise.context.ApplicationScoped;
import javax.ws.rs.core.Response;
import java.util.List;

@ApplicationScoped
public class EventService {

	public Response getAllEvents() {
		List<Event> allEvents = Event.findAll().list();
		if (allEvents.isEmpty()) return Response.status(204).build();
		return Response.status(200).entity(allEvents).build();

	}

}
