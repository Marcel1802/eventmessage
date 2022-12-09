package de.marcel1802.Rest;

import de.marcel1802.entities.EventDTO;
import de.marcel1802.service.EventService;

import javax.inject.Inject;
import javax.transaction.Transactional;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
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

	@Transactional
	@POST
	@Path("event")
	public Response createEvent(EventDTO event) {
		return eventService.createEvent(event);
	}

}
