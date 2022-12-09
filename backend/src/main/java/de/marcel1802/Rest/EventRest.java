package de.marcel1802.Rest;

import de.marcel1802.entities.Event;
import de.marcel1802.entities.EventDTO;
import de.marcel1802.service.EventService;

import javax.inject.Inject;
import javax.transaction.Transactional;
import javax.websocket.server.PathParam;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.core.Response;

@Path("api")
public class EventRest {

	@Inject
	EventService eventService;

	@GET
	@Path("events")
	public Response getAllEvents() {
		return eventService.getAllEvents();
	}

	@GET
	@Path("events/incoming")
	public Response getIncomingEvents() {
		return eventService.getIncomingEvents();
	}

	@GET
	@Path("events/old")
	public Response getOldEvents() {
		return eventService.getOldEvents();
	}

	@Transactional
	@POST
	@Path("event")
	public Response createEvent(EventDTO event) {
		return eventService.createEvent(event);
	}

	@Transactional
	@PUT
	@Path("event")
	public Response updateEvent(Event event) {
		return eventService.updateEvent(event);
	}

	@Transactional
	@DELETE
	@Path("event/{id}")
	public Response deleteEvent(@PathParam("id") int id) {
		return eventService.deleteEvent(id);
	}

}
