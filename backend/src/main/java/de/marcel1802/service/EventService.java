package de.marcel1802.service;

import de.marcel1802.entities.Event;
import de.marcel1802.entities.EventDTO;
import de.marcel1802.entities.ResponseMessage;

import javax.enterprise.context.ApplicationScoped;
import javax.ws.rs.core.Response;

import java.time.LocalDateTime;
import java.util.List;

@ApplicationScoped
public class EventService {

	public Response getAllEvents() {
		List<Event> allEvents = Event.find("deleted = false").list();
		if (allEvents.isEmpty()) return Response.status(204).build();
		return Response.status(200).entity(allEvents).build();
	}

	public Response getIncomingEvents() {
		List<Event> allEvents = Event.find("date > ?1 AND deleted = false", LocalDateTime.now()).list();
		if (allEvents.isEmpty()) return Response.status(204).build();
		return Response.status(200).entity(allEvents).build();
	}

	public Response getOldEvents() {
		List<Event> allEvents = Event.find("date < ?1 AND deleted = false", LocalDateTime.now()).list();
		if (allEvents.isEmpty()) return Response.status(204).build();
		return Response.status(200).entity(allEvents).build();
	}

	public Response createEvent(EventDTO eventDTO) {
		Event newEvent = new Event(eventDTO.getName(), eventDTO.getDate());
		newEvent.persist();
		return Response.status(201).entity(newEvent).build();
	}

	public Response updateEvent(Event event) {
		Event eventFromDB = Event.findById(event.getId());
		if (eventFromDB == null) return Response.status(401).entity(new ResponseMessage("Invalid event provided.")).build();
		eventFromDB.setDate(event.getDate());
		eventFromDB.setName(event.getName());
		eventFromDB.setDeleted(event.isDeleted());
		return Response.status(200).entity(eventFromDB).build();
	}

	public Response deleteEvent(int id) {
		Event eventFromDB = Event.findById(id);
		if (eventFromDB == null) return Response.status(401).entity(new ResponseMessage("Invalid event provided.")).build();
		eventFromDB.setDeleted(true);
		return Response.status(200).entity(eventFromDB).build(); 
	}
}
