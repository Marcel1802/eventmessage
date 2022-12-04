package de.marcel1802.Rest;

import de.marcel1802.service.EventService;

import javax.inject.Inject;
import javax.ws.rs.GET;
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

}
