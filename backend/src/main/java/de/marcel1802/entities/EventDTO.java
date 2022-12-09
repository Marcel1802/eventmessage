package de.marcel1802.entities;

import java.time.LocalDateTime;

import com.fasterxml.jackson.annotation.JsonFormat;

public class EventDTO {

    private String name;

    @JsonFormat(shape = JsonFormat.Shape.STRING, pattern = "yyyy-MM-dd HH:mm")
    private LocalDateTime date;

	public EventDTO() {
	}

	public EventDTO(String name, LocalDateTime date) {
		this.name = name;
		this.date = date;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public LocalDateTime getDate() {
		return date;
	}

	public void setDate(LocalDateTime date) {
		this.date = date;
	}
}
